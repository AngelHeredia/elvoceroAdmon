<?php

//Definimos la variable $max para establecer el límite máximo de tamaño del archivo.

$max=1500000; //(1.5Mb)

//Ahora ordenamos donde se almacenará la imagen, hemos decidido que se cree un nuevo directorio dentro de la carpeta que hemos creado en el root de nuestro hosting para contener todas las subidas. Con la función mkdir creamos el directorio el cual lo nombramos con la fecha de subida del archivo y el nombre de la imagen. 

$nombreclean=htmlspecialchars($email); //(htmlspecialchars, //esteriliza el texto del campo "nombre" eliminando los caracteres que pudieran ejecutar algún script malicioso en nuestro servidor).

$hh=date("H")+8;
$hora = date("d-m-Y $hh:i:s"); 
//$nuevodirectorio="$DOCUMENT_ROOT/../imagenes/$hora.$nombreclean";
//mkdir ($nuevodirectorio);
$uploaddir = "images/";

//A continuación tratamos el archivo de imagen, aplicando unas funciones en particular como medida de seguridad.

$filesize = $_FILES['upfile']['size'];
$filename = trim($_FILES['upfile']['name']);// (trim elimina los posibles espacios al final y al principio del nombre del archivo)
$filename = substr($filename, -20);// (con substr le decimos que coja solamente los últimos 20 caracteres por si el nombre fuera muy largo) 
$filename = ereg_replace(" ", "", $filename); //(con esta función eliminamos posibles espacios entre los caracteres del nombre) 

//Ahora creamos las condiciones que debe cumplir el archivo antes de ser almacenado en el servidor. Restringimos a .jpg ó .gif (tanto en mayusculas como en minúsculas) y finalmente cambiamos el archivo de la carpeta temporal a la final elegida. 

if($filesize < $max){
if($filesize > 0){ 
if((ereg(".jpg", $filename)) || (ereg(".gif", $filename)) || (ereg(".JPG", $filename))|| (ereg(".GIF", $filename))){
$uploadfile = "../".$uploaddir . $filename;
$uploadfile2 = $uploaddir . $filename;
if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) {
print("Archivo subido correctamente");
echo $uploadfile;
} else {
print("Error de conexi&oacute;n con el server");
echo $uploadfile;
}
} else {
print("Sólo se permiten imágenes en formato jpg. y gif., no se ha podido adjuntar.");
}
}
else {
print("<br><br>Campo vac&iacute;o, no ha seleccionado ninguna imagen");
}
}
else {
print("<br><br>La imagen que ha intentado adjuntar es mayor de 1.5 Mb, si desea cambie el tamaño del archivo y vuelva a intentarlo.");
}
?> 
