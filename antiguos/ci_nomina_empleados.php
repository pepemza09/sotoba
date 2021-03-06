<?php
class ci_nomina_empleados extends soeva_ci
{
	protected $s__datos_filtro;
	protected $s__es_empresa;

	function get_relacion()
	{
		return $this->dep('datos');
	}

	function get_editor()
	{
		return $this->dep('ci_edicion_nomina');
	}

	function ini()
	{
		//verificamos que no tenga usuario de empresa
		$perfiles = toba::usuario()->get_perfiles_funcionales();
		$this->s__es_empresa = false;
		foreach ($perfiles as $p) {
			if ($p == fijos::get_perfil_empresa()) {
				$this->s__es_empresa = true;
				$this->s__datos_filtro['cuit'] = toba::usuario()->get_id();
			}
		}
	}

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

	function resetear()
	{
		$this->dep('datos')->resetear();
		$this->set_pantalla('pant_seleccion');
	}

	function conf__pant_seleccion(toba_ei_pantalla $pantalla)
	{
		if ($this->s__es_empresa) {
			$pantalla->eliminar_dep('filtro');
		} else {
			$pantalla->set_descripcion('');
		}
	}

	function evt__procesar()
	{
		$this->dependencia('ci_edicion_nomina')->disparar_limpieza_memoria();
		$this->get_relacion()->sincronizar();
		$this->get_relacion()->resetear();
		$this->set_pantalla('pant_seleccion');
	}

	function evt__cancelar()
	{
	}

}
?>
