<?php
include('db/db.php');

$nombre=$_POST['nombre'];
$appat=$_POST['appat'];
$apmat=$_POST['apmat'];
$fecha_nac=$_POST['fecha_nac'];
$estado_civil=$_POST['estado_civil'];
$mail=$_POST['mail'];

$fecha_registro=date("Y-m-d | H:i:s a");

$sql = "INSERT INTO datos_personales (nombre,appat,apmat,fecha_nac,estado_civil,fecha_registro,mail) 
	VALUES ('$nombre','$appat','$apmat','$fecha_nac','$estado_civil','$fecha_registro','$mail')";

if (mysqli_query($conn, $sql)) {
    // echo "js";
    // echo "<script> Swal.fire({
    //     icon: 'success',
    //     title: 'ÉXITO!',
    //     text: 'Datos registrados correctamente',
    // })</script>";
    // Swal.fire({
    //     icon: 'success',
    //     title: 'ÉXITO!',
    //     text: 'Datos registrados correctamente',
    // })

    // echo "Datos insertados correctamente";
    // header("Location: form.php");
    // echo "html";
    // echo "<p class=\"formulario__mensaje-exito\" id=\"formulario__mensaje-exito\">Los datos han sido registrados exitosamente!</p>";
    // exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->