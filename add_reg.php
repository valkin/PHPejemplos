<?php

include ("conector.php");
//archivo para incluir la conexión a la base de datos

if (isset($_POST["enviar"])&& $_POST["nombre"]!="") {
	$nombre= $_POST["nombre"];
	$apellido1= $_POST["apellido1"];
	$apellido2= $_POST["apellido2"];
	$telefono= $_POST["telefono"];
	$direccion= $_POST["direccion"];
	$email= $_POST["email"]; 
    }


$inserdata = 'INSERT INTO clientes (nombre, apellido1, apellido2, telefono, direccion, email)' ;
$inserdata = $inserdata."values ('".$nombre."','".$apellido1."','".$apellido2."','".$telefono."','".$direccion."','".$email."')";
$statement= mysqli_prepare($conexion, $inserdata);
$result = mysqli_stmt_execute($statement);

if (!$result) {
	$message= 'Error'.mysqli_error($conexion)."\n";
	die($message);

}else{
	echo "<br/><center>¡Gracias! Hemos recibido sus datos.\n</center>" ;	
}

//"VALUES ('$nombre', '$apellido1', '$apellido2', '$telefono', '$direccion', '$email')";
//$result = mysql_query($sql);
//echo "¡Gracias! Hemos recibido sus datos.\n";


//desconectamos la base de datos
$close = mysqli_close($conexion)
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

?>
