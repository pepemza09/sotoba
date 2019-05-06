<?php

class toba_mc_comp__349000016
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'soeva',
    'objeto' => 349000016,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_datos_tabla',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'so_empleados',
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
    'creacion' => '2019-03-26 11:12:26',
    'punto_montaje' => 349000001,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000250',
    'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_tabla.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000250',
    'clase_icono' => 'objetos/datos_tabla.gif',
    'clase_descripcion_corta' => 'datos_tabla',
    'clase_instanciador_proyecto' => NULL,
    'clase_instanciador_item' => NULL,
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => 349000001,
    'cant_dependencias' => 0,
    'posicion_botonera' => NULL,
  ),
  '_info_estructura' => 
  array (
    'tabla' => 'so_empleados',
    'alias' => NULL,
    'min_registros' => NULL,
    'max_registros' => NULL,
    'ap' => 1,
    'punto_montaje' => 349000001,
    'ap_sub_clase' => NULL,
    'ap_sub_clase_archivo' => NULL,
    'ap_modificar_claves' => 0,
    'ap_clase' => 'ap_tabla_db_s',
    'ap_clase_archivo' => 'nucleo/componentes/persistencia/toba_ap_tabla_db_s.php',
    'tabla_ext' => NULL,
    'esquema' => 'public',
    'esquema_ext' => 'public',
  ),
  '_info_columnas' => 
  array (
    0 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000019,
      'columna' => 'id_empleado',
      'tipo' => 'E',
      'pk' => 1,
      'secuencia' => 'so_empleados_id_empleado_seq',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
      'tabla' => NULL,
    ),
    1 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000020,
      'columna' => 'nombre',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 100,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => NULL,
    ),
    2 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000021,
      'columna' => 'apellido',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 100,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => NULL,
    ),
    3 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000022,
      'columna' => 'cuit',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => NULL,
    ),
    4 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000023,
      'columna' => 'id_empresa',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => NULL,
    ),
    5 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000024,
      'columna' => 'aporta_sindicato',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => '',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => 'so_empleados',
    ),
    6 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000025,
      'columna' => 'neto',
      'tipo' => 'N',
      'pk' => 0,
      'secuencia' => '',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => 'so_empleados',
    ),
    7 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000026,
      'columna' => 'aporte_1_5',
      'tipo' => 'N',
      'pk' => 0,
      'secuencia' => '',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => 'so_empleados',
    ),
    8 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000027,
      'columna' => 'bruto',
      'tipo' => 'N',
      'pk' => 0,
      'secuencia' => '',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => 'so_empleados',
    ),
    9 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000028,
      'columna' => 'aporte_2',
      'tipo' => 'N',
      'pk' => 0,
      'secuencia' => '',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => 'so_empleados',
    ),
    10 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000029,
      'columna' => 'fecha',
      'tipo' => 'F',
      'pk' => 0,
      'secuencia' => '',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => 'so_empleados',
    ),
    11 => 
    array (
      'objeto_proyecto' => 'soeva',
      'objeto' => 349000016,
      'col_id' => 349000030,
      'columna' => 'estado',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => '',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
      'tabla' => 'so_empleados',
    ),
  ),
  '_info_externas' => 
  array (
  ),
  '_info_externas_col' => 
  array (
  ),
  '_info_valores_unicos' => 
  array (
  ),
  '_info_fks' => 
  array (
  ),
);
	}

}

?>