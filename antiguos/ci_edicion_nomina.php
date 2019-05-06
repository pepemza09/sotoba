<?php
require_once ('3ros/afip/src/Afip.php');

class ci_edicion_nomina extends soeva_ci
{
	protected $s__cuit;

	function extender_objeto_js()
	{
		$this->js_caso_afip();
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
				$nombre = strtoupper($resp['nombre']);
				$apellido = strtoupper($resp['apellido']);
			}
			//tomamos los datos que necesitamos de la respuesta
			$respuesta->set(array(
				$resp['idPersona'],
				$nombre,
				$apellido,
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
				this.dep('form_empleados').ef('nombre').set_estado(datos[1]);
				this.dep('form_empleados').ef('apellido').set_estado(datos[2]);
			}
		";
	}


	function get_relacion()
	{
		return $this->controlador()->get_relacion();
	}

	function conf__0(toba_ei_pantalla $pantalla)
	{
		$empresa = $this->get_relacion()->tabla('so_empresa')->get();
		$pantalla->set_descripcion('Personal de la empresa: <b>' . $empresa['razon_social'] . '</b>');
	}
	function conf__cuadro_empleados(soeva_ei_cuadro $cuadro)
	{
		$buscador = $this->get_relacion()->tabla('so_empleados')->nueva_busqueda();
		$buscador->set_columnas_orden(array('apellido' => SORT_ASC, 'nombre' => SORT_ASC));
		return $buscador->buscar_filas();
	}

	function evt__cuadro_empleados__seleccion($seleccion)
	{
		$this->get_relacion()->tabla('so_empleados')->set_cursor($seleccion);
	}

	function conf__form_cuit(soeva_ei_formulario $form)
	{
		return $this->s__cuit;
 	}

	function evt__form_cuit__modificacion($datos)
	{
		$this->s__cuit = $datos['cuit'];
	}

	function evt__form_cuit__cancelar()
	{
		$this->get_relacion()->tabla('so_empleados')->resetear_cursor();
	}

	function conf__form_empleados(soeva_ei_formulario $form)
	{
		if ($this->get_relacion()->tabla('so_empleados')->hay_cursor()) {
			return $this->get_relacion()->tabla('so_empleados')->get();
		}
	}

	function evt__form_empleados__modificacion($datos)
	{
		$datos['cuit'] = $this->s__cuit;
		$this->get_relacion()->tabla('so_empleados')->set($datos);
		$this->evt__form_cuit__cancelar();
	}

}
?>
