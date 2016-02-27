<?php

include_once '../conexiones/conexion.php';
 $con= new conexion();
 $con->Conectarse();
  
  if (!isset($_GET['d'])) {
    echo $error = "Falta el código";
    die;
}
  $codigo = $_GET['d'];
  $sql="delete from noticias where idNoticias = '$codigo'";

mysql_query($sql) or die(' La consulta fall&oacute;: ' . mysql_error()." ".  $sql); 


header("Location:#/noticiasAdmon");
?>
