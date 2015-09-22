<?php if ( $a==$b ) { ?>
 
<html>
<head>
    <link rel="stylesheet" href="./style1.css" type="text/css" >
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

<meta charset="UTF-8">
<title>Bienvenida al Sistema OXI - Listado de Clientes</title>
	</style> 

</head>
    <body>
<button onclick="window.location.href='welcome.html'">Volver al inicio</button>
<button onclick="window.location.href='clienteslist.php'">Lista de clientes</button>
 
    </body>
</html>
 
<?php } ?>

<?php 
include ("conector.php");

$query="select * from clientes";
$result=mysql_query($conexion, $query) or die(mysql_error());
echo "<table border=1>
<tr>
<th>Nombre</th>
<th>Primer Apellido</th>
<th>Segundo Apellido</th>
<th>Dirección</th>
<th>Telefono</th>
<th>Correo Electronico</th>
</tr>";
while($r=mysql_fetch_assoc($result)) {
	$id=$r['id'];
	$nombre=$r['nombre'];
    $apellido1=$r['apellido1'];
	$apellido2=$r['apellido2'];
    $direccion=$r['direccion'];
	$telefono=$r['telefono'];
    $email=$r['email'];
	
	echo " <tr>";
				echo "<td> $fila[Nombre]  </td> <td> $fila[Telefono] </td> <br> ";
				echo " </tr> ";
  

    while ($registro = mysql_fetch_array($result)){ 
echo " 
    <tr> 
      <td width='150'>".$id['id']."</td> 
      <td width='150'>".$nombre['nombre']."</td> 
      <td width='150'>".$apellido1['apellido1']."</td> 
      <td width='150'></td> 

    </tr> 
"; 
} 
 mysql_close($conexion);
}
echo "</table>";


?>