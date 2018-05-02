<?php


$dbname = "practica";

$dbuser = "root"; 

$dbpass = ""; /*Aquí colocar la contraseña*/


$dbhost = "localhost";




$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("No se puede conectar a".$dbhost);

mysqli_select_db($connect,$dbname) or die("No se puede abrir ".$dbname);



$result = $connect->query("SELECT codigo, nombre FROM alumnos");
$codigo = 0;
$nombre = 0;

while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$codigo = $row['codigo'];
	$nombre = $row['nombre'];
	echo $codigo;
	echo $nombre;
}


?>