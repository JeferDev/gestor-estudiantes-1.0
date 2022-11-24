<?php
include "modelo/conexion.php";
$s_id=$_GET["s_id"];
$sql=$conexion->query(" SELECT * FROM `test_students` where s_id=$s_id ");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar estudiantes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/e879c3628a.js" crossorigin="anonymous"></script>
</head>
<body>

	<form class="col-4 p-3 m-auto" method="POST">

		<h5 class="text-center alert alert-secondary">Actualizar estudiantes</h5>
		<input type="hidden" name="s_id" value="<?= $_GET["s_id"] ?>">

		<?php 

		include "controlador/actualizar-estudiantes.php";

		while($datos=$sql->fetch_object()){ ?>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Nombre</label>
			<input type="text" class="form-control" name="first_name" value="<?= $datos->first_name ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Apellido</label>
			<input type="text" class="form-control" name="last_name" value="<?= $datos->last_name ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Grado</label>
			<input type="number" class="form-control" name="lv_id" value="<?= $datos->lv_id ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Grupo</label>
			<input type="text" class="form-control" name="group" value="<?= $datos->group ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" value="<?= $datos->email ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Telefono</label>
			<input type="tel" class="form-control" name="phone_number" value="<?= $datos->phone_number ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Geolocalizacion</label>
			<input type="text" class="form-control" name="geolocation" value="<?= $datos->geolocation ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Estado</label>
			<input type="number" class="form-control" name="status" value="<?= $datos->status ?>">    
		</div>

		<?php
	}

	?>
	<button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Actualizar estudiante</button>

</form>
</body>
</html>