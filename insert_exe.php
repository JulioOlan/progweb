<?php
include('db/db.php');

$nombre         = $_POST['nombre'];
$appat          = $_POST['appat'];
$apmat          = $_POST['apmat'];
$fecha_nac      = $_POST['fecha_nac'];
$fecha_registro = date("Y-m-d | H:i:s a");
$mail           = $_POST['mail'];
$telefono       = $_POST['telefono'];
$no_control     = $_POST['no_control'];
$sexo           = $_POST['sexo'];
$carrera        = $_POST['fkcarrera'];


$sql = "INSERT INTO datos_personales (nombre,appat,apmat,fecha_nac,fecha_registro,mail,telefono,no_control,sexo,fkcarrera) 
	VALUES ('$nombre','$appat','$apmat','$fecha_nac','$fecha_registro','$mail','$telefono','$no_control','$sexo','$carrera')";


if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>