<?php
include ("../conexiones/conexion.php");
$link=  Conectarse();
function __autoload($classname) {//con esta funcion llamamos a las clases sinusar include por cada una, el archivo de las clases debe llamarse igual a la clase.
include("../clases/$classname.php");
};
?>