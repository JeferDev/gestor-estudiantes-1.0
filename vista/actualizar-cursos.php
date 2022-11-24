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
/**
 *  @include "../modelo/conexion.php" crea la conexion con la base de datos.
 *  Se optiene el valor s_id de la url
 *  @include "plantilla" aspecto de panel administrador
 * */
include "../modelo/conexion.php";
$s_id=$_GET["s_id"];
include "plantilla.php";
?>

<script>
	function eliminar(){
		var respuesta=confirm("Estas seguro que deseas eliminar?");
		return respuesta
	}
</script>
	<h5 class="text-center alert alert-secondary">Gestor de cursos del estudiante</h5>

	<div class="row">
		<div class="container">
			<div class="col-lg-12 coll-md-12 barra m-5">
				<form class="col-2 form-group p-3" action="" method="POST">
					<h5 class="text-center text-secondary">Matricular un curso</h5>
					<?php 
					include "../controlador/agregar-curso.php";
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

					<input type="submit" name="btnAgregarCurso" class="btn btn-small btn-primary" value="Asignar Curso">
				</form>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-12 m-5">
					<h5 class="text-center text-secondary">Cursos matriculados</h5>

					<table class="table m-auto">
						<thead class="bg-info">
							<tr>
								<th scope="col">Curso</th>
								<th scope="col">Retirar</th>

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
										<form action="../controlador/actualizar-cursos.php" method="POST" >
											<input hidden type="number" name="s_id" value="<?= $datos->s_id?>" readonly="readonly">
											<input hidden type="number" name="cxs_id" value="<?= $datos->cxs_id?>" readonly="readonly">
											<input onclick="return eliminar()" type="submit" name="EliminarCurso" class="btn btn-small btn-danger" value="Retirar">
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
<?php include "fin.php" ?>

