<?php include_once '../conexiones/conexion.php';
 $con= new conexion();
 $con->Conectarse();
  
  if (!isset($_GET['i'])) {
    echo $error = "Falta el código";
    die;
}
  $codigo = $_GET['i'];
  
  $sql2 = mysql_query("select * from noticias where idNoticias =".$codigo);
  $arrayUpdate= array();
  
  
  while ($rwNoticias = mysql_fetch_array($sql2)){
  $update= new stdClass();
  $update->id = $rwNoticias["idNoticias"];
  $update->imagen = $rwNoticias["imagen"];
 $update->titulo= utf8_encode($rwNoticias["titulo"]);
  $update->contenido = utf8_encode($rwNoticias["contenido"]);
  $update->slider = $rwNoticias["slider"];
  $update->fecha = $rwNoticias["fecha"];
  $update->publicacion = $rwNoticias["publicacion"];
  $update->posicion = $rwNoticias["posicion"];
  $update->sintesis= utf8_encode($rwNoticias["sintesis"]);
  $update->idmunicipio = $rwNoticias["idmunicipio"];
 $update->idMenus = $rwNoticias["idMenus"];
  
  $arrayUpdate[]= $update;
  
  }
  
  echo $json_response= json_encode($arrayUpdate);
