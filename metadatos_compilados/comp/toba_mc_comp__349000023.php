<?php

class toba_mc_comp__349000023
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'soeva',
    'objeto' => 349000023,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_datos_relacion',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Nómina empleados - DR',
    'titulo' => NULL,
    'colapsable' => NULL,
    'descripcion' => NULL,
    'fuente_proyecto' => 'soeva',
    'fuente' => 'soeva',
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
    'creacion' => '2019-03-26 13:46:53',
    'punto_montaje' => 349000001,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000251',
    'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_relacion.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000251',
    'clase_icono' => 'objetos/datos_relacion.gif',
    'clase_descripcion_corta' => 'datos_relacion',
    'clase_instanciador_proyecto' => NULL,
    'clase_instanciador_item' => NULL,
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => 349000001,
    'cant_dependencias' => 2,
    'posicion_botonera' => NULL,
  ),
  '_info_estructura' => 
  array (
    'proyecto' => 'soeva',
    'objeto' => 349000023,
    'debug' => 0,
    'ap' => 2,
    'punto_montaje' => 349000001,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'sinc_susp_constraints' => 0,
    'sinc_orden_automatico' => 1,
    'sinc_lock_optimista' => 1,
  ),
  '_info_relaciones' => 
  array (
    0 => 
    array (
      'proyecto' => 'soeva',
      'objeto' => 349000023,
      'asoc_id' => 349000001,
      'padre_proyecto' => 'soeva',
      'padre_objeto' => 349000008,
      'padre_id' => 'so_empresa',
      'hijo_proyecto' => 'soeva',
      'hijo_objeto' => 349000016,
      'hijo_id' => 'so_empleados',
      'cascada' => NULL,
      'orden' => '1',
    ),
  ),
  '_info_dependencias' => 
  array (
    0 => 
    array (
      'identificador' => 'so_empresa',
      'proyecto' => 'soeva',
      'objeto' => 349000008,
      'clase' => 'toba_datos_tabla',
      'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_tabla.php',
      'subclase' => 'dt_so_empresa',
      'subclase_archivo' => 'datos/dt_so_empresa.php',
      'fuente' => 'soeva',
      'parametros_a' => '1',
      'parametros_b' => '1',
    ),
    1 => 
    array (
      'identificador' => 'so_empleados',
      'proyecto' => 'soeva',
      'objeto' => 349000016,
      'clase' => 'toba_datos_tabla',
      'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_tabla.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'soeva',
      'parametros_a' => '0',
      'parametros_b' => '9999999',
    ),
  ),
  '_info_columnas_asoc_rel' => 
  array (
    0 => 
    array (
      'asoc_id' => 349000001,
      'proyecto' => 'soeva',
      'objeto' => 349000023,
      'hijo_clave' => 349000023,
      'hijo_objeto' => 349000016,
      'col_hija' => 'id_empresa',
      'padre_objeto' => 349000008,
      'padre_clave' => 349000001,
      'col_padre' => 'id_empresa',
    ),
  ),
);
	}

}

?>