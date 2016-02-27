<?php




include_once '../conexiones/conexion.php';
 $con= new conexion();
 $con->Conectarse();
 
 
 $sql4 ="SELECT * FROM municipios";
 
$resul=mysql_query($sql4);

$arrayUpdate2=array();

while ($row= mysql_fetch_array($resul)){
    
    $muni= new stdClass();
    $muni->idm=$row['idmunicipio'];
    $muni->mun= utf8_encode($row['municipio']);
   
    $arrayUpdate2[]= $muni;
    
}
echo $json_response= json_encode($arrayUpdate2);