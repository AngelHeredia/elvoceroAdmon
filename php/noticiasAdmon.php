<?php 
 include_once '../conexiones/conexion.php';
$cn = new conexion();
$cn->Conectarse();


$sql= mysql_query("select * from noticias ORDER BY fecha desc");

$arrayAdmonNoticia = array();
 

  while($rwNoticias = mysql_fetch_array($sql)){
  
  $admNews= new stdClass();

  $admNews->id = $rwNoticias["idNoticias"];

  $admNews->title = utf8_encode($rwNoticias["titulo"]);

 $admNews->image = $rwNoticias["imagen"];

  $admNews->contenido = utf8_encode($rwNoticias["contenido'"]);

$admNews->slider = $rwNoticias["slider"];

  $admNews->fecha = $rwNoticias["fecha"];

  $admNews->publi = $rwNoticias["publicacion"];

 $admNews->posicion = $rwNoticias["posicion"];

 $admNews->sintesis = utf8_encode($rwNoticias["sintesis"]);

 $admNews->idMu = $rwNoticias["idmunicipio"];

  $admNews->idMe = $rwNoticias["idMenus"];
  
  $arrayAdmonNoticia[] = $admNews;

 
  }
   echo $json_response = json_encode($arrayAdmonNoticia);
  


 

    





