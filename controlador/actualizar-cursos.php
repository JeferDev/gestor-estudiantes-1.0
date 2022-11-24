<?php
include "../modelo/conexion.php";
$s_id=$_POST["s_id"];
$cxs_id=$_POST["cxs_id"];

$sql=$conexion->query(" DELETE FROM `test_courses_x_student` where cxs_id=$cxs_id ");
if($sql){
	header('Location: ../actualizar-cursos.php?s_id='.$s_id);
}else{
	echo "<div class='alert alert-danger'>error al eliminar curso</div>";
}



