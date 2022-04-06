<?php include('db/db.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
	<!-- Fuente GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<!-- Apertura del container-->
		<div class="jumbotron">
			<h1>Usuarios Registrados</h1>
			<a class="btn btn-success" href="form.php">Agregar Usuario</a>
		</div>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="form.php">FORMULARIO</a></li>
				<li class="breadcrumb-item active" aria-current="page">TABLA USUARIOS</li>
			</ol>
		</nav><br>

		<?php
		$sql = "SELECT * FROM datos_personales";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		?>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Nombre(s)</th>
					<th>Fecha Nacimiento</th>
					<th>Estado Civil</th>
					<th>Acciones</th>
				</tr>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
					$newFecha = date("d/m/Y", strtotime($row["fecha_nac"]));
				?>
					<tr>
						<td><?= $row["id"] ?></td>
						<td><?= $row["nombre"] . " " . $row["appat"] . " " . $row["apmat"] ?><br>
							<small><em>Fecha registro: <?= $row["fecha_registro"] ?></em></small>
						</td>
						<td><?= $newFecha ?></td>
						<td><?php
							if ($row["estado_civil"] == 0) {
								echo "Soltero";
							} else {
								echo "Casado";
							}
							?></td>
						<!-- ?id= Se usa para pasar por get una variable de nombre id y despues del signo = se coloca el valor de la variable, en este caso se tomará de la variable $row['id'] -->
						<td><a class="btn btn-warning" href="form_update.php?id=<?= $row['id'] ?>"><i class="fas fa-eye"></i></a>
							<a class="btn btn-danger" href="delete_exe.php?id=<?= $row['id'] ?>"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php
				}

				?>
			</table>
		<?php
		} else {
			echo "No existen registros";
		}

		mysqli_close($conn);

		?>

	</div> <!-- Cierre del container-->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validaciones.js"></script>
	<script src="https://kit.fontawesome.com/637592b28d.js" crossorigin="anonymous"></script>
</body>

</html>