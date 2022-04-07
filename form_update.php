<?php
include('db/db.php');

//Recibimos por GET el id del registro a borrar
$id=$_GET['id'];

// sentencia SQL para OBTENER un registro
$sql = "SELECT * FROM datos_personales WHERE id=$id";
if ($cons=mysqli_query($conn, $sql)) {
	$reg=mysqli_fetch_assoc($cons);
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$reg['nombre']?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
	<!-- Fuente GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">


</head>
<body>		
	<div class="container">
		<div class="jumbotron">
			<h1>Formulario de Actualización</h1>
		</div>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="ejercicio1.html">INICIO</a></li>
				<li class="breadcrumb-item active" aria-current="page">FORMULARIO</li>
			</ol>
		</nav><br>
		<!-- <p><a class="btn btn-warning text-right" href="tabla.php">Ver tabla de Usuarios</a></p> -->
		<p><a class="btn btn-warning text-right" href="datatable.php">Tabla de Usuarios</a></p>

		<form id="formulario" action="update_exe.php" method="post">
			<div class="row">
				<div class="formulario__grupo col-md" id="grupo__nombre">
					<label for="nombre" class="formulario__label">Nombre(s)</label>
					<div class="formulario__group-input">
						<input type="text" name="nombre" id="nombre" class="formulario__input" value="<?=$reg['nombre']?>">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El nombre(s) solo debe contener letras, espacios y acentos.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__appat">
					<label for="appat" class="formulario__label">Apellido Paterno</label>
					<div class="formulario__group-input">
						<input type="text" name="appat" id="appat" class="formulario__input" value="<?=$reg['appat']?>">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El apellido paterno debe contener letras, espacios y/o acentos.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__apmat">
					<label for="appat" class="formulario__label">Apellido Materno</label>
					<div class="formulario__group-input">
						<input type="text" name="apmat" id="apmat" class="formulario__input" value="<?=$reg['apmat']?>">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El apellido materno debe contener letras, espacios y/o acentos.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__mail">
					<label for="mail" class="formulario__label">Correo Electrónico</label>
					<div class="formulario__group-input">
						<input type="text" name="mail" id="mail" class="formulario__input" value="<?=$reg['mail']?>">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
				</div>
			</div><br>
			<div class="row">
				<div class="formulario__grupo col-md" id="grupo__telefono">
					<label for="telefono" class="formulario__label">Teléfono</label>
					<div class="formulario__group-input">
						<input type="text" name="telefono" id="telefono" class="formulario__input" value="<?=$reg['telefono']?>">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">Este campo no puede estar vacío.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__fecha_nac">
					<label for="fecha_nac" class="formulario__label">Fecha de Nacimiento</label>
					<div class="formulario__group-input">
						<input type="date" name="fecha_nac" id="fecha_nac" class="formulario__input" value="<?=$reg['fecha_nac']?>" required="required">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">Este campo no puede estar vacío.</p>
				</div>
				<div class="formulario__grupo col-md" id="grupo__fkcarrera">
					<label for="fkcarrera" class="formulario__label">Carreras</label>
					<select name="fkcarrera" id="fkcarrera">
						<option value="1" name="civil" id="civil" for="carrera" <?php if ($reg['fkcarrera']==1) {echo "selected";}?>>Ing Cívil</option>
						<option value="2" name="quimica" id="quimica" for="carrera" <?php if ($reg['fkcarrera']==2) {echo "selected";}?>>Ing Química</option>
						<option value="3" name="petrolera" id="petrolera" for="carrera" <?php if ($reg['fkcarrera']==3) {echo "selected";}?>>Ing Petrolera</option>
						<option value="4" name="ambiental" id="ambiental" for="carrera" <?php if ($reg['fkcarrera']==4) {echo "selected";}?>>Ing Ambiental</option>
						<option value="5" name="industrial" id="industrial" for="carrera" <?php if ($reg['fkcarrera']==5) {echo "selected";}?>>Ing Industrial</option>
						<option value="6" name="bioquimica" id="bioquimica" for="carrera" <?php if ($reg['fkcarrera']==6) {echo "selected";}?>>Ing Bioquímica</option>
						<option value="7" name="informatica" id="informatica" for="carrera" <?php if ($reg['fkcarrera']==7) {echo "selected";}?>>Ing Informática</option>
						<option value="8" name="admin" id="admin" for="carrera" <?php if ($reg['fkcarrera']==8) {echo "selected";}?>>Lic en Administración</option>
						<option value="9" name="gestion" id="gestion" for="carrera" <?php if ($reg['fkcarrera']==9) {echo "selected";}?>>Ing en Gestión Empresarial</option>
						<option value="10" name="sistemas" id="sistemas" for="carrera" <?php if ($reg['fkcarrera']==10) {echo "selected";}?>>Ing en Sistemas Computacionales</option>
						<option value="11" name="tic" id="tic" for="carrera" <?php if ($reg['fkcarrera']==11) {echo "selected";}?>>Ing en TIC</option>
					</select>
				</div>
				<div class="formulario__grupo col-md" id="grupo__no_control">
					<label for="no_control" class="formulario__label">Número de Control</label>
					<div class="formulario__group-input">
						<input type="text" name="no_control" id="no_control" class="formulario__input" value="<?=$reg['no_control']?>">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__error">El número de control no puede estar vacío.</p>
				</div>
				<div class="form-group col-md">
					<label for="sexo" class="formulario__label">Sexo</label>
					<div class="form-check col-md-12">
						<input class="form-check-input" type="radio" name="sexo" id="hombre" value="0" required="required" <?php if ($reg['sexo']==0) {echo "checked";}?>>
						<label class="form-check-label" for="hombre">
							Hombre
						</label>
					</div>
					<div class="form-check col-md-12">
						<input class="form-check-input" type="radio" name="sexo" id="mujer" value="1" <?php if ($reg['sexo']==1) {echo "checked";}?>>
						<label class="form-check-label" for="mujer">
							Mujer
						</label>
					</div>
					<input type="hidden" name="id" value="<?= $reg['id'] ?>">
				</div>
			</div>
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Por favor rellene el formulario correctamente.</p>
			</div>
			<br>
			<!-- <input type="submit" class="btn btn-info" value="Guardar datos"> -->
			<button class="btn btn-info" id="actualizar">Actualizar datos</button>
			<!-- <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Los datos han sido registrados exitosamente!</p> -->
		</form>
	</div>
		<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validaciones-update.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://kit.fontawesome.com/637592b28d.js" crossorigin="anonymous"></script>
</body>
</html>
<?php }
mysqli_close($conn);
?>