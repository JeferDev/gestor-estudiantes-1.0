function buscarExistencia($lista, $s_id, $conexion){

			$sql="SELECT * FROM `test_courses_x_student` WHERE c_id='$lista' AND s_id='$s_id'";
			$busqueda=mysql_query($conexion,$sql);

			if (mysql_num_rows($busqueda)>0) {
				return 1;
			}else{
				return 0;
			}

		}


		if (buscarExistencia($lista, $s_id, $conexion)==1) {
			echo '<div class="alert alert-wa"> El usuario ya existe. </div>';
		}




		<?php
/**$lista=$_POST['lista'];
$s_id=$_POST['s_id'];*/

if(!empty($_POST["btnAgregarCurso"])){
	if(!empty($_POST["lista"]) and !empty($_POST["s_id"])){

		$lista=$_POST["lista"];
		$s_id=$_POST["s_id"];


		$sql1="SELECT * FROM `test_courses_x_student` WHERE c_id='$lista' AND s_id='$s_id'";
		$result=mysql_query($conexion,$sql1);
	}}/**

		if (mysql_num_rows($result)>0) {
				echo '<div class="alert alert-warning"> No puedes matricular 2 veces. </div>';
			}else{
				$sql2=$conexion->query("INSERT INTO test_courses_x_student (c_id, s_id) VALUES ('$lista', '$s_id')");
				}
			if ($sql2==1) {
						echo '<div class="alert alert-success"> Se ha matriculado correctamente. </div>';
						}else{
							echo '<div class="alert alert-danger"> Error en la matricula. </div>';
							}
			}
		

	}else{
		echo '<div class="alert alert-warning"> Seleccione un curso.</div>';
	}
