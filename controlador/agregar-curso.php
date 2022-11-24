<?php
/**
* Jefersson Bedoya
*
* envio de INSERT a MySQL
*
* Recibe datos enviados mediante formulario
* Valida que los datos sean diferente de vacio
* Asigna cada dato a una variale
* Se realiza la sentencia INSERT con los nuevos datos 
* Si inserta Envia un mensaje de success
* Si no modifica envia un danger
* Si existen campos vacios envia un error
* @author Jefersson Bedoya
* @author github.com/Engineerjef
* @version 1.0
* @date 24/11/2022
*/
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




