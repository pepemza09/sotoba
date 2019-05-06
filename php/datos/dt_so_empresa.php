<?php
class dt_so_empresa extends soeva_datos_tabla
{
	function get_listado($filtro=array())
	{
		$where = array();
		if (isset($filtro['cuit'])) {
			$where[] = "cuit = ".quote($filtro['cuit']);
		}
		if (isset($filtro['razon_social'])) {
			$where[] = "razon_social ILIKE ".quote("%{$filtro['razon_social']}%");
		}
		$sql = "SELECT
			t_se.id_empresa,
			t_se.razon_social,
			t_se.cuit,
			t_se.cod_postal,
			t_se.provincia,
			t_se.direccion,
			t_se.id_provincia_afip,
			t_se.localidad,
			t_se.email,
			t_se.telefono
		FROM
			so_empresa as t_se
		ORDER BY razon_social";
		if (count($where)>0) {
			$sql = sql_concatenar_where($sql, $where);
		}
		return toba::db('soeva')->consultar($sql);
	}




}
?>