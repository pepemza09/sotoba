<?php
class ci_edicion extends soeva_ci
{
	protected $s__cuit;

	function get_relacion()
	{
		return $this->controlador->get_relacion();
	}

	function extender_objeto_js()
	{
		$this->js_caso_afip();
	}

	function ini()
	{
	}

	function conf__cuadro_empleados(soeva_ei_cuadro $cuadro)
	{
		$buscador = $this->get_relacion()->tabla('so_empleados')->nueva_busqueda();
		$buscador->set_columnas_orden(array('apellido' => SORT_ASC, 'nombre'=> SORT_ASC));
		return $buscador->buscar_filas();
	}

	function evt__cuadro_empleados__seleccion($seleccion)
	{
		$this->get_relacion()->tabla('so_empleados')->set_cursor($seleccion);
	}

	function conf__form_empleado(soeva_ei_formulario $form)
	{
		if ($this->get_relacion()->tabla('so_empleados')->hay_cursor()) {
			 $a = $this->get_relacion()->tabla('so_empleados')->get();
			 return $a;
		}
	}

	function evt__form_empleado__alta($datos)
	{
		$datos['cuit'] = $this->s__cuit['cuit'];
		$datos['fecha'] = fijos::get_fecha();
		$this->get_relacion()->tabla('so_empleados')->nueva_fila($datos);
	}

	function evt__form_empleado__baja()
	{
		$this->get_relacion()->tabla('so_empleados')->set(null);
		$this->evt__form_empleado__cancelar();
	}

	function evt__form_empleado__modificacion($datos)
	{
		$datos['cuit'] = $this->s__cuit['cuit'];
		$datos['fecha'] = fijos::get_fecha();
		$this->get_relacion()->tabla('so_empleados')->set($datos);
		$this->evt__form_empleado__cancelar();
	}

	function evt__form_empleado__cancelar()
	{
		$this->get_relacion()->tabla('so_empleados')->resetear_cursor();
	}

	function conf__form_cuit(soeva_ei_formulario $form)
	{
		if ($this->get_relacion()->tabla('so_empleados')->hay_cursor()) {
			return $this->get_relacion()->tabla('so_empleados')->get();
		}
	}

	function evt__form_cuit__modificacion($datos)
	{
		$this->s__cuit = $datos;
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

}
?>
