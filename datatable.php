<?php include('db/db.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="estilos.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.24/r-2.2.7/rr-1.2.7/datatables.min.css"/> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
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
			<table class="table table-striped" id="usuarios">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre(s)</th>
						<th>Fecha Nacimiento</th>
						<th>Correo Electrónico</th>
						<th>Teléfono</th>
						<th>No. de Control</th>
						<th>Sexo</th>
						<th>Carrera</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
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
							<td><?= $row["mail"] ?></td>
							<td><?= $row["telefono"] ?></td>
							<td><?= $row["no_control"] ?></td>
							<td><?php
								if ($row["sexo"] == 0) {
									echo "Hombre";
								} else {
									echo "Mujer";
								}
								?></td>
							<td><?php
								if ($row["fkcarrera"] == 1) {
									echo "Ing Cívil";
								} elseif ($row["fkcarrera"] == 2){
									echo "Ing Química";
								} elseif ($row["fkcarrera"] == 3){
									echo "Ing Petrolera";
								} elseif ($row["fkcarrera"] == 4){
									echo "Ing Ambiental";
								} elseif ($row["fkcarrera"] == 5){
									echo "Ing Industrial";
								} elseif ($row["fkcarrera"] == 6){
									echo "Ing Bioquímica";
								} elseif ($row["fkcarrera"] == 7){
									echo "Ing Informática";
								} elseif ($row["fkcarrera"] == 8){
									echo "Lic en Administración";
								} elseif ($row["fkcarrera"] == 9){
									echo "Ing en Gestión Empresarial";
								} elseif ($row["fkcarrera"] == 10){
									echo "Ing en Sistemas Computacionales";
								} else{
									echo "Ing en TIC";
								}
								?></td>
							<!-- ?id= Se usa para pasar por get una variable de nombre id y despues del signo = se coloca el valor de la variable, en este caso se tomará de la variable $row['id'] -->
							<td><a class="btn btn-warning" href="form_update.php?id=<?= $row['id'] ?>"><i class="fas fa-eye"></i></a>
								<!-- <a class="btn btn-danger" href="delete_exe.php?id=<?php //$row['id'] ?>"><i class="fas fa-trash"></i></a> -->
								<button class="btn btn-danger" onclick="pregunata(<?= $row['id'] ?>)"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
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
	<!-- <script src="js/jquery-3.4.1.slim.min.js"></script> -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/delete.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.24/r-2.2.7/rr-1.2.7/datatables.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- <script src="//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"></script> -->
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/searchbuilder/1.3.2/js/dataTables.searchBuilder.min.js"></script>
	<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#usuarios').DataTable({
				"language": {
					"processing": "Cargando...",
					"loadingRecords": "Cargando registros...",
					"lengthMenu": "Mostrar _MENU_ resultados por página",
					"zeroRecords": "Sin resultados",
					"info": "Mostrando página _PAGE_ de _PAGES_",
					"infoEmpty": "Los datos no se han cargado...",
					"infoFiltered": "(filtrando de _MAX_ registros)",
					"search": "Buscar:",
					"paginate": {
						"first": "Primero",
						"last": "Último",
						"next": "Siguiente",
						"previous": "Anterior"
					},
				},
				// dom: 'QBfrtip',
				// asStripeClasses: ["impar par tercero"], //Estilos de Clases
				// buttons: [
				// 	'pdf',
				// 	'excel',
				// 	'csv',
				// 	{
				// 		extend: 'copy',
				// 		text: 'Copiar',
				// 		titleAttr: 'Copiar en Portapapeles',
				// 		className: 'botones-datatables',
				// 		init: function(api, node, config) {
				// 			$(node).removeClass('buttons-html5');
				// 		}
				// 	},
				// 	{
				// 		extend: 'excel',
				// 		text: 'Excel',
				// 		titleAttr: 'Exportar en Excel',
				// 		className: 'botones-datatables',
				// 		init: function(api, node, config) {
				// 			$(node).removeClass('buttons-html5');
				// 		},
				// 	},
				// 	{
				// 		extend: 'print',
				// 		text: 'Imprimir',
				// 		titleAttr: 'Exportar en PDF o Imprimir',
				// 		className: 'none',
				// 		className: 'botones-datatables',
				// 		init: function(api, node, config) {
				// 			$(node).removeClass('buttons-print');
				// 		},
				// 		key: {
				// 			key: 'p',
				// 			altkey: true
				// 		}
				// 	},
				// ],
				// buttons: [
				// 	'copy', 'csv', 'excel', 'pdf', 'print'
				// ]
			});
		});
	</script>
	<script src="https://kit.fontawesome.com/637592b28d.js" crossorigin="anonymous"></script>
</body>

</html>