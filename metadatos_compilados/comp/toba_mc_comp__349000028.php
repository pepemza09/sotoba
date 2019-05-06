<?php

class toba_mc_comp__349000028
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'soeva',
    'objeto' => 349000028,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ci',
    'subclase' => 'ci_edicion_nomina',
    'subclase_archivo' => 'gestion_empresas/nomina_empleados/ci_edicion_nomina.php',
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Nómina empleados - CI - ci_edicion_nomina',
    'titulo' => NULL,
    'colapsable' => 0,
    'descripcion' => NULL,
    'fuente_proyecto' => NULL,
    'fuente' => NULL,
    'solicitud_registrar' => NULL,
    'solicitud_obj_obs_tipo' => NULL,
    'solicitud_obj_observacion' => NULL,
    'parametro_a' => NULL,
    'parametro_b' => NULL,
    'parametro_c' => NULL,
    'parametro_d' => NULL,
    'parametro_e' => NULL,
    'parametro_f' => NULL,
    'usuario' => NULL,
    'creacion' => '2019-03-26 13:50:12',
    'punto_montaje' => 349000001,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000249',
    'clase_archivo' => 'nucleo/componentes/interface/toba_ci.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000249',
    'clase_icono' => 'objetos/multi_etapa.gif',
    'clase_descripcion_corta' => 'ci',
    'clase_instanciador_proyecto' => 'toba_editor',
    'clase_instanciador_item' => '1642',
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 3,
    'posicion_botonera' => 'abajo',
  ),
  '_info_eventos' => 
  array (
  ),
  '_info_puntos_control' => 
  array (
  ),
  '_info_ci' => 
  array (
    'ev_procesar_etiq' => NULL,
    'ev_cancelar_etiq' => NULL,
    'objetos' => NULL,
    'ancho' => '100%',
    'alto' => NULL,
    'posicion_botonera' => NULL,
    'tipo_navegacion' => 'tab_v',
    'con_toc' => 0,
    'botonera_barra_item' => 0,
  ),
  '_info_ci_me_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 349000011,
      'identificador' => '0',
      'etiqueta' => 'Nómina',
      'descripcion' => 'Empleados pertenecientes a la empresa',
      'tip' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => NULL,
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 1,
      'punto_montaje' => 349000001,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
  ),
  '_info_obj_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 349000011,
      'proyecto' => 'soeva',
      'objeto_ci' => 349000028,
      'dep_id' => 349000025,
      'orden' => 0,
      'identificador_pantalla' => '0',
      'identificador_dep' => 'form_cuit',
    ),
    1 => 
    array (
      'pantalla' => 349000011,
      'proyecto' => 'soeva',
      'objeto_ci' => 349000028,
      'dep_id' => 349000024,
      'orden' => 1,
      'identificador_pantalla' => '0',
      'identificador_dep' => 'form_empleados',
    ),
    2 => 
    array (
      'pantalla' => 349000011,
      'proyecto' => 'soeva',
      'objeto_ci' => 349000028,
      'dep_id' => 349000029,
      'orden' => 2,
      'identificador_pantalla' => '0',
      'identificador_dep' => 'cuadro_empleados',
    ),
  ),
  '_info_evt_pantalla' => 
  array (
  ),
  '_info_dependencias' => 
  array (
    0 => 
    array (
      'identificador' => 'cuadro_empleados',
      'proyecto' => 'soeva',
      'objeto' => 349000032,
      'clase' => 'toba_ei_cuadro',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_cuadro.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => NULL,
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    1 => 
    array (
      'identificador' => 'form_cuit',
      'proyecto' => 'soeva',
      'objeto' => 349000030,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'soeva',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    2 => 
    array (
      'identificador' => 'form_empleados',
      'proyecto' => 'soeva',
      'objeto' => 349000029,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'soeva',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
  ),
);
	}

}

?>