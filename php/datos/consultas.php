<?php
class consultas
{
  function set_usuario($datos)
  {
    $sql = "INSERT INTO desarrollo.apex_usuario (nombre,usuario,clave) VALUES ('" . $datos['nombre'] . "', '" . $datos['usuario'] . "', '" . $datos['usuario'] . "')";
    toba::db('toba_usuarios')->consultar($sql);
  }

  function set_usuario_perfil($datos)
  {
    $sql = "INSERT INTO desarrollo.apex_usuario_proyecto (proyecto,usuario,usuario_grupo_acc) VALUES ('" . $datos['proyecto'] . "', '" . $datos['usuario'] . "', '" . $datos['perfil'] . "' );";
    toba::db('toba_usuarios')->consultar($sql);
  }
}
?>
