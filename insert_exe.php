<?php
include('db/db.php');

$nombre         = $_POST['nombre'];
$appat          = $_POST['appat'];
$apmat          = $_POST['apmat'];
$fecha_nac      = $_POST['fecha_nac'];
$carrera        = $_POST['carrera'];
$no_control     = $_POST['no_control'];
$estado_civil   = $_POST['estado_civil'];
$mail           = $_POST['mail'];

$fecha_registro = date("Y-m-d | H:i:s a");

$sql = "INSERT INTO datos_personales (nombre,appat,apmat,fecha_nac,no_control,carrera,estado_civil,fecha_registro,mail) 
	VALUES ('$nombre','$appat','$apmat','$fecha_nac','$no_control','$carrera','$estado_civil','$fecha_registro','$mail')";


if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>