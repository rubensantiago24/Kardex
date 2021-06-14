<?php


include("conexion.php");

$cantidad_entradas = $_POST['cantidad_entradas'];
$valor_unitario_entradas = $_POST['valor_unitario_entradas'];
$fecha_entradas = $_POST['fecha_entradas'];
$fk_id_detalle_entradas = $_POST['fk_id_detalle_entradas'];

$resultado_total_entradas = $cantidad_entradas * $valor_unitario_entradas;

$query = "INSERT INTO entradas (cantidad_entradas, valor_unitario_entradas, valor_total_entradas, fecha_entradas, fk_id_detalle_entradas) VALUES ('$cantidad_entradas', '$valor_unitario_entradas', '$resultado_total_entradas', '$fecha_entradas', '$fk_id_detalle_entradas')";
$resultado = $db->query($query);

if ($resultado) {
	header("location: registrar_entradas.php?R=1");
}
else{
	echo "No se inserto.";
}


?>