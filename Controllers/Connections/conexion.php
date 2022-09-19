<?php


$hostname_conexion = 'localhost';
$database_conexion = 'bc-dental';
$username_conexion = 'root';
$password_conexion = '';


	$conexion = mysqli_connect($hostname_conexion, $username_conexion, $password_conexion, $database_conexion);

	//print_r($conexion);


	//LEER -- Codificacion para poder imprimir valores en otros idiomas como Coreano, Japones,  Chino, Acentos, ñ
	mysqli_set_charset($conexion,"utf8");

	//ESCRIBIR -- y poner el campo de la BD en Collation la siguiente codificacion utf8_general_ci

	//print_r($conexion);


	date_default_timezone_set("America/Monterrey"); 

?>      