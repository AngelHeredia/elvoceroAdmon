<?php


include_once '../conexiones/conexion.php';
$cn = new conexion();
$cn->Conectarse();


$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request =  (array) $request;


$request['titulo'] = strtoupper($request['titulo']);



 $sql=  mysql_query("insert into noticias(titulo, imagen, contenido, slider, publicacion, posicion, sintesis, fecha, idmunicipio, idMenus) values ('".$request['titulo']."','".$request['imagen']."', '".$request['contenido']."', '".$request['slider']."', '".$request['publicacion']."', '".$request['posicion']."', '".$request['sintesis']."', '".$request['titulo']."', '".$request['idm']."', '".$request['idMenus']."')"); 
