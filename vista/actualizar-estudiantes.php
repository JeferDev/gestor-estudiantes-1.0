<?php
/**
* Jefersson Bedoya
*
* Vista de actualizar cursos del estudiante
* @author Jefersson Bedoya
* @author github.com/Engineerjef
* @version 1.0
* @date 24/11/2022
*/

include "../modelo/conexion.php";
$s_id=$_GET["s_id"];
$sql=$conexion->query(" SELECT * FROM `test_students` where s_id=$s_id ");
include "plantilla.php";
?>

<h5 class="text-center alert alert-secondary">Actualizar estudiantes</h5>
<form class="col-4 p-4 m-5" method="POST">


	<input type="hidden" name="s_id" value="<?= $_GET["s_id"] ?>">

	<?php 

	include "../controlador/actualizar-estudiantes.php";

	while($datos=$sql->fetch_object()){ ?>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Nombre</label>
			<input type="text" class="form-control" name="first_name" pattern="[a-zA-Z]+" value="<?= $datos->first_name ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Apellido</label>
			<input type="text" class="form-control" name="last_name" pattern="[a-zA-Z]+" value="<?= $datos->last_name ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Grado</label>
			<input type="number" class="form-control" name="lv_id" pattern="[0-9]+" value="<?= $datos->lv_id ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Grupo</label>
			<input type="text" class="form-control" name="group" pattern="[a-zA-Z]" value="<?= $datos->group ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" value="<?= $datos->email ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Telefono</label>
			<input type="tel" class="form-control" name="phone_number" pattern="[0-9]+" value="<?= $datos->phone_number ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Geolocalizacion</label>
			<input type="text" class="form-control" name="geolocation" value="<?= $datos->geolocation ?>">    
		</div>

		<div class="mb-1">
			<label for="exampleInputEmail1" class="form-label">Estado actual:</label>

			<select class="form-control">
				<option value="
				<?php 
				$estado=$datos->status;
				if ($estado>0) {?>
					">Activo</option>
					<?php 
					;}else{
						?>
						<option value="0">Inactivo</option>
						<?php 
						;}
						?>
					</select> 
					<br>
					<label for="exampleInputEmail1" class="form-label">Cambiar estado a:</label>
					<select class="form-control" required="" name="status">
						<option value="">Seleccione un estado:</option>
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>
					</select>

					<!--input type="text" class="form-control" name="status" required="" pattern="[0-1]" value="<?= $datos->status ?>"-->    
				</div>

				<?php
			}
			?>
			<button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Actualizar estudiante</button>

		</form>
		<?php include "fin.php" ?>