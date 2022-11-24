<?php
/**$lista=$_POST['lista'];
$s_id=$_POST['s_id'];*/

if(!empty($_POST["btnAgregarCurso"])){
	if(!empty($_POST["lista"]) and !empty($_POST["s_id"])){
		
		$lista=$_POST["lista"];
		$s_id=$_POST["s_id"];
		$sql=$conexion->query("INSERT INTO test_courses_x_student (c_id, s_id) VALUES ('$lista', '$s_id')");
		if ($sql==1) {
			echo '<div class="alert alert-success"> Se ha matriculado correctamente. </div>';
		}else{
			echo '<div class="alert alert-danger"> Error en la matricula. </div>';
		}

	}else{
		echo '<div class="alert alert-warning"> Seleccione un curso.</div>';
	}
}




