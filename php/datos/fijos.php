<?php
class fijos
{
  function conf_afip()
  {
    $afip = new Afip(
                  array(
                      'CUIT' => 30715324705,
                      'production' => true,
                      'cert' => 'cert',
                      'key' => 'key'
                  )
                );
    return $afip;
  }

  function get_perfil_empresa()
  {
    return "empresa";
  }

  function get_fecha()
  {
    return date('Y-m-d');
  }
}
?>
