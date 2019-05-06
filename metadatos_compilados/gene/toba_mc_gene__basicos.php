<?php

class toba_mc_gene__basicos
{
	static function info_basica()
	{
		return array (
  'nombre' => 'soeva',
  'descripcion' => 'SOEVA',
  'descripcion_corta' => 'Soeva',
  'estilo' => 'plastik',
  'estilo_proyecto' => 'toba',
  'con_frames' => 1,
  'frames_clase' => NULL,
  'frames_archivo' => NULL,
  'salida_impr_html_c' => NULL,
  'salida_impr_html_a' => NULL,
  'menu' => 'css',
  'menu_archivo' => 'nucleo/menu/toba_menu_css.php',
  'path_includes' => NULL,
  'path_browser' => NULL,
  'administrador' => NULL,
  'listar_multiproyecto' => 1,
  'orden' => NULL,
  'palabra_vinculo_std' => NULL,
  'version_toba' => '3.2.2',
  'requiere_validacion' => 1,
  'usuario_anonimo' => NULL,
  'usuario_anonimo_desc' => NULL,
  'usuario_anonimo_grupos_acc' => NULL,
  'validacion_intentos' => NULL,
  'validacion_intentos_min' => 5,
  'validacion_bloquear_usuario' => 1,
  'validacion_debug' => NULL,
  'sesion_tiempo_no_interac_min' => 30,
  'sesion_tiempo_maximo_min' => NULL,
  'sesion_subclase' => NULL,
  'sesion_subclase_archivo' => NULL,
  'contexto_ejecucion_subclase' => NULL,
  'contexto_ejecucion_subclase_archivo' => NULL,
  'usuario_subclase' => NULL,
  'usuario_subclase_archivo' => NULL,
  'encriptar_qs' => NULL,
  'registrar_solicitud' => '1',
  'registrar_cronometro' => NULL,
  'item_inicio_sesion' => '2',
  'item_pre_sesion' => '349000001',
  'item_pre_sesion_popup' => NULL,
  'item_set_sesion' => NULL,
  'log_archivo' => 1,
  'log_archivo_nivel' => 7,
  'fuente_datos' => 'soeva',
  'version' => NULL,
  'version_fecha' => NULL,
  'version_detalle' => NULL,
  'version_link' => NULL,
  'tiempo_espera_ms' => NULL,
  'navegacion_ajax' => NULL,
  'codigo_ga_tracker' => NULL,
  'extension_toba' => true,
  'extension_proyecto' => false,
  'pm_impresion' => 349000001,
  'pm_sesion' => 349000001,
  'pm_contexto' => 349000001,
  'pm_usuario' => 349000001,
  'es_css3' => 0,
);
	}

	static function info_fuente__soeva()
	{
		return array (
  'proyecto' => 'soeva',
  'fuente_datos' => 'soeva',
  'descripcion' => 'Fuente soeva',
  'descripcion_corta' => 'soeva',
  'fuente_datos_motor' => 'postgres7',
  'host' => NULL,
  'punto_montaje' => 349000001,
  'subclase_archivo' => NULL,
  'subclase_nombre' => NULL,
  'orden' => NULL,
  'schema' => 'public',
  'instancia_id' => 'soeva',
  'administrador' => NULL,
  'link_instancia' => 1,
  'tiene_auditoria' => 0,
  'parsea_errores' => 0,
  'permisos_por_tabla' => 0,
  'usuario' => NULL,
  'clave' => NULL,
  'base' => NULL,
  'link_base_archivo' => 1,
  'motor' => 'postgres7',
  'profile' => NULL,
  'mapeo_tablas_dt' => 
  array (
    'so_empresa' => 349000008,
    'so_empleados' => 349000016,
  ),
);
	}

	static function info_fuente__toba_usuarios()
	{
		return array (
  'proyecto' => 'soeva',
  'fuente_datos' => 'toba_usuarios',
  'descripcion' => 'Fuente usuarios',
  'descripcion_corta' => NULL,
  'fuente_datos_motor' => NULL,
  'host' => NULL,
  'punto_montaje' => 349000001,
  'subclase_archivo' => NULL,
  'subclase_nombre' => NULL,
  'orden' => NULL,
  'schema' => 'desarrollo',
  'instancia_id' => NULL,
  'administrador' => NULL,
  'link_instancia' => NULL,
  'tiene_auditoria' => 0,
  'parsea_errores' => 0,
  'permisos_por_tabla' => 0,
  'usuario' => NULL,
  'clave' => NULL,
  'base' => NULL,
  'link_base_archivo' => NULL,
  'motor' => NULL,
  'profile' => NULL,
  'mapeo_tablas_dt' => 
  array (
  ),
);
	}

	static function info_indices_componentes()
	{
		return array (
);
	}

}

?>