<?php
require_once ('3ros/afip/src/Afip.php');
class ci_empresas extends soeva_ci
{
	protected $s__datos_filtro;
	protected $s__error;
	protected $s__es_empresa;

	function extender_objeto_js()
	{
		$this->js_caso_afip();
	}

	//---- Filtro -----------------------------------------------------------------------

	function conf__filtro(toba_ei_formulario $filtro)
	{
		if (isset($this->s__datos_filtro)) {
			$filtro->set_datos($this->s__datos_filtro);
		}
	}

	function evt__filtro__filtrar($datos)
	{
		$this->s__datos_filtro = $datos;
	}

	function evt__filtro__cancelar()
	{
		unset($this->s__datos_filtro);
	}

	//---- Cuadro -----------------------------------------------------------------------

	function conf__cuadro(toba_ei_cuadro $cuadro)
	{
		if (isset($this->s__datos_filtro)) {
			$cuadro->set_datos($this->dep('datos')->tabla('so_empresa')->get_listado($this->s__datos_filtro));
		} else {
			$cuadro->set_datos($this->dep('datos')->tabla('so_empresa')->get_listado());
		}
	}

	function evt__cuadro__seleccion($datos)
	{
		$this->dep('datos')->cargar($datos);
		$this->set_pantalla('pant_edicion');
	}

	//---- Formulario -------------------------------------------------------------------

	function conf__formulario(toba_ei_formulario $form)
	{
		if ($this->dep('datos')->esta_cargada()) {
			$form->set_datos($this->dep('datos')->tabla('so_empresa')->get());
		} else {
			$this->pantalla()->eliminar_evento('eliminar');
		}
	}

	function evt__formulario__modificacion($datos)
	{
		foreach ($datos as $d) {
			if (!isset($d)) {
				$this->s__error = true;
			} else {
				$this->s__error = false;
			}
		}
		if ($this->s__error) {
			toba::notificacion()->agregar('Todos los datos son obligatorios');
			return false;
		} else {
				$this->dep('datos')->tabla('so_empresa')->set($datos);
		}

	}

	function resetear()
	{
		$this->dep('datos')->resetear();
		$this->set_pantalla('pant_seleccion');
	}

	//---- EVENTOS CI -------------------------------------------------------------------

	function evt__agregar()
	{
		$this->set_pantalla('pant_edicion');
	}

	function evt__volver()
	{
		$this->resetear();
	}

	function evt__eliminar()
	{
		$this->dep('datos')->eliminar_todo();
		$this->resetear();
	}

	function evt__guardar()
	{
		if (!$this->s__error) {
			$this->dep('datos')->sincronizar();
			$this->resetear();
		}

	}

	/**
		* Metodo invocado desde JS para 'calcular' el nuevo importe
		*/
	function ajax__consultar_afip($parametros, toba_ajax_respuesta $respuesta)
	{
		try {
			$afip = fijos::conf_afip();
			$detalles = $afip->RegisterScopeFour->GetTaxpayerDetails($parametros['cuit']);
			//transformamos el objeto en array
			$temp = json_encode($detalles);
			$resp = json_decode($temp, true);
			if (isset($resp['razonSocial'])) {
				$nombre = strtoupper($resp['razonSocial']);
			} else {
				$nombre = strtoupper($resp['apellido']) . ' ' . strtoupper($resp['nombre']);
			}
			//tomamos los datos que necesitamos de la respuesta
			$respuesta->set(array(
				$resp['idPersona'],
				$nombre,
				$resp['domicilio'][0]['direccion'],
				$resp['domicilio'][0]['localidad'],
				$resp['domicilio'][0]['descripcionProvincia'],
				$resp['domicilio'][0]['codPostal'],
				$resp['email']['direccion'],
				$resp['domicilio'][0]['idProvincia'],
				$resp['telefono']['numero'],
			));
		} catch (Exception $e) {
				toba::notificacion()->agregar($e);
		}
	}

	/**
		* Javascript necesario para el caso de preguntar/responder datos
		*/
	function js_caso_afip()
	{
		$id_js = toba::escaper()->escapeJs($this->objeto_js);
		echo "
			/**
				* Accion del boton CONSULTAR
				*/
			{$id_js}.evt__form_cuit__consultar = function() {
				//--- Construyo los parametros para el calculo, en este caso son los valores del form
				var parametros = this.dep('form_cuit').get_datos();

				//--- Hago la peticion de datos al server, la respuesta vendra en el metodo this.actualizar_datos
				this.ajax('consultar_afip', parametros, this, this.actualizar_datos);

				//--- Evito que el mecanismo 'normal' de comunicacion cliente-servidor se ejecute
				return false;
			}

			/**
				* Accion cuando vuelve la respuesta desde PHP
				*/
			{$id_js}.actualizar_datos = function(datos)
			{
				//this.dep('formulario').ef('cuit').set_estado(datos[0]);
				this.dep('formulario').ef('razon_social').set_estado(datos[1]);
				this.dep('formulario').ef('direccion').set_estado(datos[2]);
				this.dep('formulario').ef('localidad').set_estado(datos[3]);
				this.dep('formulario').ef('provincia').set_estado(datos[4]);
				this.dep('formulario').ef('cod_postal').set_estado(datos[5]);
				this.dep('formulario').ef('email').set_estado(datos[6]);
				this.dep('formulario').ef('id_provincia_afip').set_estado(datos[7]);
				this.dep('formulario').ef('telefono').set_estado(datos[8]);
			}
		";
	}

	function conf__form_cuit(soeva_ei_formulario $form)
	{
		if ($this->dep('datos')->esta_cargada()) {
			$form->set_datos($this->dep('datos')->tabla('so_empresa')->get());
		} else {
			$this->pantalla()->eliminar_evento('eliminar');
		}
	}

	function evt__form_cuit__modificacion($datos)
	{
		$this->dep('datos')->tabla('so_empresa')->set($datos);
	}

	function conf__form_usuario(soeva_ei_formulario $form)
	{
		if ($this->dep('datos')->esta_cargada()) {
			$form->set_datos($this->dep('datos')->tabla('so_empresa')->get());
		}
	}

	function evt__form_usuario__generar($datos)
	{
		//verificamos que el usuario no existe
		if (toba::usuario()->existe_usuario($datos['cuit'])) {
			toba::usuario()->set_clave_usuario($datos['clave'], $datos['cuit']);
			toba::notificacion()->agregar('Se actualizó la clave satisfactoriamente','info');
			$this->resetear();
		} else {
			try {
				consultas::set_usuario(array('nombre' => $datos['razon_social'], 'usuario' => $datos['cuit']));
				consultas::set_usuario_perfil(array('proyecto' => toba::proyecto()->get_id(), 'usuario' => $datos['cuit'], 'perfil' => fijos::get_perfil_empresa()));
				toba::usuario()->set_clave_usuario($datos['clave'], $datos['cuit']);
				toba::notificacion()->agregar('Se creó el usuario satisfactoriamente','info');
				$this->resetear();
			} catch (Exception $e) {
					toba::notificacion()->agregar($e);
			}
		}
	}

	function evt__cuadro__usuario($seleccion)
	{
		$this->dep('datos')->cargar($seleccion);
		$this->set_pantalla('pant_usuario');
	}



}
?>
