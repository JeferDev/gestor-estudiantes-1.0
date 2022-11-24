<?php
include "modelo/conexion.php";
$s_id=$_GET["s_id"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestor de cursos del estudiante </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/e879c3628a.js" crossorigin="anonymous"></script>
</head>
<body>
	<h1 class="text-center p-5">Gestor de cursos del estudiante </h1>

	<div class="row">
		<div class="container">
			<div class="col-lg-12 coll-md-12 barra">
				<form class="col-2 form-group p-3" action="" method="POST">
					<h5 class="text-center text-secondary">Matricular un curso</h5>
					<?php 
					include "modelo/conexion.php";
					include "controlador/agregar-curso.php";

					 ?>
					<select class="form-select m-4" name="lista">
						<option value="">Seleccione un curso</option>
						<option value="1">Open sea survival</option>
						<option value="2">Genetic manipulation</option>
						<option value="3">Crocodile training</option>
						<option value="4">Advanced mapalé dancing</option>
						<option value="5">Metaverse extreme sports</option>
					</select>

					<input hidden type="text" name="s_id" value="<?=$s_id?>">

					<input type="submit" name="btnAgregarCurso" class="btn btn-small btn-primary" value="Agregar Curso">
				</form>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-12 pull-right">
					<h5 class="text-center text-secondary">Cursos matriculados</h5>

					<table class="table m-auto">
						<thead class="bg-info">
							<tr>
								<th scope="col">Cursos</th>
								<th scope="col">Eliminar</th>

							</tr>
						</thead>
						<tbody>
							<?php

							$sql=$conexion->query("SELECT test_courses_x_student.s_id, test_courses_x_student.cxs_id, test_courses.name from test_courses_x_student INNER JOIN test_students ON test_courses_x_student.s_id=test_students.s_id INNER JOIN test_courses ON test_courses_x_student.c_id=test_courses.c_id WHERE test_students.s_id=$s_id ");
							while ($datos=$sql->fetch_object()) {

								?>
								<tr>
									<td><?= $datos->name?></td>
									<td>
										<form action="controlador/actualizar-cursos.php" method="POST" >
											<input hidden type="number" name="s_id" value="<?= $datos->s_id?>" readonly="readonly">
											<input hidden type="number" name="cxs_id" value="<?= $datos->cxs_id?>" readonly="readonly">
											<input type="submit" name="EliminarCurso" class="btn btn-small btn-danger" value="Eliminar">
										</form>
									</td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<!--

<div class="row">
    <div class="container">
      <div class="col-lg-12 coll-md-12 barra">
        aqui va algo
      </div>
      
      <div class="row">
        <div class="col-lg-4 col-md-12 pull-right imagen">
          aqui va algo mas
        </div>
      </div>
      
      <div class="row">
         aqui va otra cosa
      </div>
  </div>
</div>

-->