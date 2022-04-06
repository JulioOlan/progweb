<?php
include('db/db.php');

//Recibimos por GET el id del registro a borrar
$id=$_GET['id'];

// sentencia SQL para eliminar un registro
$sql = "DELETE FROM datos_personales WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Registro eliminado satisfactoriamente";
} else {
  echo "Error borrando el registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 