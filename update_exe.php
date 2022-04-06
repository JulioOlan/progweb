<?php
include('db/db.php');

//Recibir mediante post los campos que se van a actualizar
$nombre         = $_POST['nombre'];
$appat          = $_POST['appat'];
$apmat          = $_POST['apmat'];
$fecha_nac      = $_POST['fecha_nac'];
$fecha_update   = date("Y-m-d | H:i:s a");
$mail           = $_POST['mail'];
$telefono       = $_POST['telefono'];
$no_control     = $_POST['no_control'];
$sexo           = $_POST['sexo'];
$carrera        = $_POST['fkcarrera'];

// $fecha_registro=date("Y-m-d | H:i:s a");


$sql = "UPDATE datos_personales SET nombre='$nombre',appat='$appat',apmat='$apmat',fecha_nac='$fecha_nac',fecha_update='$fecha_update',mail='$mail',telefono='$telefono',no_control='$no_control',sexo='$sexo',carrera='$fkcarrera', WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  // echo "Registro actualizado correctamente";
} else {
  echo "Error actualizando registro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 