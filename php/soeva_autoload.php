<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class soeva_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'Afip' => '3ros/afip/src/Afip.php',
		'TokenAutorization' => '3ros/afip/src/Afip.php',
		'AfipWebService' => '3ros/afip/src/Afip.php',
		'ElectronicBilling' => '3ros/afip/src/Class/ElectronicBilling.php',
		'RegisterScopeFive' => '3ros/afip/src/Class/RegisterScopeFive.php',
		'RegisterScopeFour' => '3ros/afip/src/Class/RegisterScopeFour.php',
		'RegisterScopeTen' => '3ros/afip/src/Class/RegisterScopeTen.php',
		'consultas' => 'datos/consultas.php',
		'dt_so_empresa' => 'datos/dt_so_empresa.php',
		'fijos' => 'datos/fijos.php',
		'soeva_ci' => 'extension_toba/componentes/soeva_ci.php',
		'soeva_cn' => 'extension_toba/componentes/soeva_cn.php',
		'soeva_datos_relacion' => 'extension_toba/componentes/soeva_datos_relacion.php',
		'soeva_datos_tabla' => 'extension_toba/componentes/soeva_datos_tabla.php',
		'soeva_ei_arbol' => 'extension_toba/componentes/soeva_ei_arbol.php',
		'soeva_ei_archivos' => 'extension_toba/componentes/soeva_ei_archivos.php',
		'soeva_ei_calendario' => 'extension_toba/componentes/soeva_ei_calendario.php',
		'soeva_ei_codigo' => 'extension_toba/componentes/soeva_ei_codigo.php',
		'soeva_ei_cuadro' => 'extension_toba/componentes/soeva_ei_cuadro.php',
		'soeva_ei_esquema' => 'extension_toba/componentes/soeva_ei_esquema.php',
		'soeva_ei_filtro' => 'extension_toba/componentes/soeva_ei_filtro.php',
		'soeva_ei_firma' => 'extension_toba/componentes/soeva_ei_firma.php',
		'soeva_ei_formulario' => 'extension_toba/componentes/soeva_ei_formulario.php',
		'soeva_ei_formulario_ml' => 'extension_toba/componentes/soeva_ei_formulario_ml.php',
		'soeva_ei_grafico' => 'extension_toba/componentes/soeva_ei_grafico.php',
		'soeva_ei_mapa' => 'extension_toba/componentes/soeva_ei_mapa.php',
		'soeva_servicio_web' => 'extension_toba/componentes/soeva_servicio_web.php',
		'soeva_comando' => 'extension_toba/soeva_comando.php',
		'soeva_modelo' => 'extension_toba/soeva_modelo.php',
		'ci_empresas' => 'gestion_empresas/empresas/ci_empresas.php',
		'ci_nomina_empleados' => 'gestion_empresas/nomina_empleados/ci_nomina_empleados.php',
		'ci_login' => 'login/ci_login.php',
		'cuadro_autologin' => 'login/cuadro_autologin.php',
		'pant_login' => 'login/pant_login.php',
		'soeva_autoload' => 'soeva_autoload.php',
		'ci_certificados' => 'test/certificados_afip/ci_certificados.php',
	);
}
?>