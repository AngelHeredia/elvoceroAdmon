<?php



try {

    $link= new PDO("mysql:host=localhost;dbname=bdnews", "root", "");
    $link->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->exec("SET NAMES 'utf8'");
} catch (Exception $ex) {
    echo 'Conecion no disponible';
}

echo 'exito';


