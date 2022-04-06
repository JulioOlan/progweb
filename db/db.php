 <?php
date_default_timezone_set('America/Mexico_City');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Creación de la conexion
//$conn = mysqli_connect($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar conexión
if (!$conn) {
    die("<strong style='color: red'>Falló la conexión: </strong>" . mysqli_connect_error());
}
//echo "<strong>Conectado correctamente</strong>";
?> 