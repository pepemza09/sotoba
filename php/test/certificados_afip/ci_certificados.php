<?php
require_once ('3ros/afip/src/Afip.php');
class ci_certificados extends soeva_ci
{
	function ini()
	{
		try {
			$afip = fijos::conf_afip();
			$detalles = $afip->RegisterScopeFour->GetTaxpayerDetails(20305844218);
			$temp = json_encode($detalles);
			$prueba = json_decode($temp,true);
			$prueba['parametro_a'][0] = "este es el logo";
			ei_arbol($prueba);
		} catch (Exception $e) {
				toba::notificacion()->agregar($e);
		}
	}
}
?>
