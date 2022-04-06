<?php
include('db/db.php');

//Recibir mediante post los campos que se van a actualizar
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$appat=$_POST['appat'];
$apmat=$_POST['apmat'];
$fecha_nac=$_POST['fecha_nac'];
$estado_civil=$_POST['estado_civil'];
$mail=$_POST['mail'];

$fecha_registro=date("Y-m-d | H:i:s a");


$sql = "UPDATE datos_personales SET nombre='$nombre',appat='$appat',apmat='$apmat',fecha_nac='$fecha_nac',estado_civil='$estado_civil',mail='$mail' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Registro actualizado correctamente";
} else {
  echo "Error actualizando registro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 