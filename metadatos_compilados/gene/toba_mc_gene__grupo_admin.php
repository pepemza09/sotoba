<?php

class toba_mc_gene__grupo_admin
{
	static function get_items_menu()
	{
		return array (
  'soeva-2' => 
  array (
    'padre' => '1',
    'carpeta' => 0,
    'proyecto' => 'soeva',
    'item' => '2',
    'nombre' => 'Inicio',
    'orden' => '0',
    'imagen' => NULL,
    'imagen_recurso_origen' => NULL,
    'es_primer_nivel' => true,
  ),
  'soeva-349000002' => 
  array (
    'padre' => '1',
    'carpeta' => 1,
    'proyecto' => 'soeva',
    'item' => '349000002',
    'nombre' => 'test',
    'orden' => '99',
    'imagen' => NULL,
    'imagen_recurso_origen' => 'apex',
    'es_primer_nivel' => true,
  ),
  'soeva-349000004' => 
  array (
    'padre' => '1',
    'carpeta' => 1,
    'proyecto' => 'soeva',
    'item' => '349000004',
    'nombre' => 'Gestión',
    'orden' => NULL,
    'imagen' => NULL,
    'imagen_recurso_origen' => 'apex',
    'es_primer_nivel' => true,
  ),
  'soeva-349000003' => 
  array (
    'padre' => '349000002',
    'carpeta' => 0,
    'proyecto' => 'soeva',
    'item' => '349000003',
    'nombre' => 'Certificados AFIP',
    'orden' => NULL,
    'imagen' => NULL,
    'imagen_recurso_origen' => 'apex',
    'es_primer_nivel' => false,
  ),
  'soeva-349000005' => 
  array (
    'padre' => '349000004',
    'carpeta' => NULL,
    'proyecto' => 'soeva',
    'item' => '349000005',
    'nombre' => 'Empresas',
    'orden' => '0',
    'imagen' => NULL,
    'imagen_recurso_origen' => NULL,
    'es_primer_nivel' => false,
  ),
  'soeva-349000008' => 
  array (
    'padre' => '349000004',
    'carpeta' => NULL,
    'proyecto' => 'soeva',
    'item' => '349000008',
    'nombre' => 'Nómina empleados',
    'orden' => '0',
    'imagen' => NULL,
    'imagen_recurso_origen' => NULL,
    'es_primer_nivel' => false,
  ),
);
	}

	static function get_items_accesibles()
	{
		return array (
  'soeva-2' => 
  array (
    'proyecto' => 'soeva',
    'item' => '2',
  ),
  'soeva-349000001' => 
  array (
    'proyecto' => 'soeva',
    'item' => '349000001',
  ),
  'soeva-349000003' => 
  array (
    'proyecto' => 'soeva',
    'item' => '349000003',
  ),
  'soeva-349000005' => 
  array (
    'proyecto' => 'soeva',
    'item' => '349000005',
  ),
  'soeva-349000008' => 
  array (
    'proyecto' => 'soeva',
    'item' => '349000008',
  ),
);
	}

	static function get_lista_permisos()
	{
		return array (
);
	}

	static function get_membresia()
	{
		return array (
);
	}

}

?>