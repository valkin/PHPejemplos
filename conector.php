<?php
	$server = "localhost";
	$user = "root";
	$pass = "Qwerty123!";
	$db = "ejemplosphp";
    
    $conexion = mysqli_connect($server, $user, $pass)or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	mysqli_select_db($db, $conexion) or die("No se ha podido conectar a la base de datos");
?>
