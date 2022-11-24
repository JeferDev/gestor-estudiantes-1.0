<?php
/**
* Jefersson Bedoya
*
* envio de delete a MySQL
*
* Recibe datos enviados mediante POST
* Realiza un DELETE haciendo uso del id de los cursos cxs_id 
* Si elimna redirecciona a la pagina del mismo estudiante
* Si no elimina envia un error
* @author Jefersson Bedoya
* @author github.com/Engineerjef
* @version 1.0
* @date 24/11/2022
*/

include "../modelo/conexion.php";
$s_id=$_POST["s_id"];
$cxs_id=$_POST["cxs_id"];

$sql=$conexion->query(" DELETE FROM `test_courses_x_student` where cxs_id=$cxs_id ");
if($sql==1){
	header('Location: ../vista/actualizar-cursos.php?s_id='.$s_id);
}else{
	echo "<div class='alert alert-danger'>error al eliminar curso</div>";
}



