<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Mi primer Formulario</title>
	<link rel="stylesheet" href="estilos.css">
	<!-- Fuente GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Formulario de Registro</h1>
		</div>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="ejercicio1.html">INICIO</a></li>
				<li class="breadcrumb-item active" aria-current="page">FORMULARIO</li>
			</ol>
		</nav><br>
		<p><a class="btn btn-warning text-right" href="tabla.php">Ver tabla de Usuarios</a></p>
		<p><a class="btn btn-danger text-right" href="datatable.php">DataTable</a></p>

		<form id="formulario" action="insert_exe.php" method="post">
			<div class="row">
				<div class="formulario__grupo col-md" id="grupo__nombre">
					<label for="nombre" class="formulario__label">Nombre(s)</label>
					<div class="formulario__group-input">
						<input type="text" name="nombre" class="formulario__input" placeholder="Nombre(s)">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El nombre(s) solo debe contener letras, espacios y acentos.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__appat">
					<label for="appat" class="formulario__label">Apellido Paterno</label>
					<div class="formulario__group-input">
						<input type="text" name="appat" id="appat" class="formulario__input" placeholder="Apellido Paterno">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El apellido paterno debe contener letras, espacios y/o acentos.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__apmat">
					<label for="appat" class="formulario__label">Apellido Materno</label>
					<div class="formulario__group-input">
						<input type="text" name="apmat" id="apmat" class="formulario__input" placeholder="Apellido Materno">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El apellido materno debe contener letras, espacios y/o acentos.</p>
				</div>
			</div><br>
			<div class="row">
				<div class="formulario__grupo col-md" id="grupo__mail">
					<label for="mail" class="formulario__label">Correo Electrónico</label>
					<div class="formulario__group-input">
						<input type="text" name="mail" id="mail" class="formulario__input" placeholder="example@gmail.com">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__fecha_nac">
					<label for="fecha_nac" class="formulario__label">Fecha de Nacimiento</label>
					<div class="formulario__group-input">
						<input type="date" name="fecha_nac" id="fecha_nac" class="formulario__input" required>
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">Este campo no puede estar vacío.</p>
				</div>
				<div class="form-group col-md">
					<label for="estado_civil" class="formulario__label">Estado Civil</label>
					<div class="form-check col-md-12">
						<input class="form-check-input" type="radio" name="estado_civil" id="solt" value="0" required>
						<label class="form-check-label" for="solt">
							Soltero
						</label>
					</div>
					<div class="form-check col-md-12">
						<input class="form-check-input" type="radio" name="estado_civil" id="casado" value="1">
						<label class="form-check-label" for="casado">
							Casado
						</label>
					</div>
				</div>
			</div>
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Por favor rellene el formulario correctamente.</p>
			</div>
			<br>
			<!-- <input type="submit" class="btn btn-info" value="Guardar datos"> -->
			<button class="btn btn-info" id="guardar">Guardar datos</button>
			<!-- <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Los datos han sido registrados exitosamente!</p> -->
		</form>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validaciones.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://kit.fontawesome.com/637592b28d.js" crossorigin="anonymous"></script>
</body>

</html>