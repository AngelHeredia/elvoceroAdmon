<?php
/**
 * Description of conexion
 *
 * @author david
 */
class conexion {
    function Conectarse() {
        if (!($link = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("bdnews", $link)) {
            echo "NOO SELECCIONO LA BASE DE DATOS";
            exit();
        }
        return $link;
    }

    function cerrarBd() {
        mysql_close();
    }

//    
}


