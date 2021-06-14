<?php


include("conexion.php");

$nombre_detalle = $_POST['nombre_detalle'];
$codigo = $_POST['codigo'];
$fecha_detalle = $_POST['fecha_detalle'];

$query = "INSERT INTO detalle (nombre_detalle, codigo, fecha_detalle) VALUES ('$nombre_detalle', '$codigo', '$fecha_detalle')";
$resultado = $db->query($query);

if ($resultado) {
	header("location: registrar_productos.php?R=1");
}
else{
	echo "No se inserto.";
}


?>