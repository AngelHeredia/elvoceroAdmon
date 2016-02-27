<?php
include_once '../conexiones/conexion.php';
$cn = new conexion();
$cn->Conectarse();


$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request =  (array) $request;


$request['titulo'] = strtoupper($request['titulo']);


 $sql= mysql_query("update noticias set titulo = '".$request['titulo']."', contenido = '".$request['contenido']."',slider ='".$request['slider']."',fecha = '".$request['fecha']."',publicacion ='".$request['publicacion']."', posicion = '".$request['posicion']."' , sintesis = '".$request['sintesis']."',idmunicipio = '".$request['idm']."', idMenus = '".$request['idMenus']."' where idNoticias = '".$request['id']."'");


