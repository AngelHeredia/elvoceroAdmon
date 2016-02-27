<?php

include_once '../conexiones/conexion.php';
 $con= new conexion();
 $con->Conectarse();
 
 
$sql3 = mysql_query("SELECT * FROM menusmunicipios");

$arrayUpdate1= array();

while ($row = mysql_fetch_array($sql3)){
    
    $menu= new stdClass();
    $menu->idMenus= $row["idMenus"];
    $menu->menus = utf8_encode($row["menus"]);
    $menu->orden = utf8_encode($row["orden"]);
    
    $arrayUpdate1[]= $menu;
    
    
}
      echo $json_response= json_encode($arrayUpdate1);