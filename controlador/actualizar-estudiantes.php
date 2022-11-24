<?php
/**
* Jefersson Bedoya
*
* envio de update a MySQL
*
* Recibe datos enviados mediante formulario
* Valida que los datos sean diferente de vacio
* Asigna cada dato a una variale
* Se realiza la sentencia UPDATE con los nuevos datos 
* Si modifica redirecciona a la pagina index
* Si no modifica envia un error
* Si existen campos vacios envia un error
* @author Jefersson Bedoya
* @author github.com/Engineerjef
* @version 1.0
* @date 24/11/2022
*/
if (!empty($_POST["btnRegistrar"])) {

	if (!empty($_POST["s_id"]) and 
		!empty($_POST["first_name"]) and 
		!empty($_POST["last_name"]) and 
		!empty($_POST["lv_id"]) and 
		!empty($_POST["group"]) and 
		!empty($_POST["email"]) and 
		!empty($_POST["phone_number"]) and 
		!empty($_POST["geolocation"])){

									$s_id=$_POST["s_id"];
									$first_name=$_POST["first_name"];
									$last_name=$_POST["last_name"];
									$lv_id=$_POST["lv_id"];
									$group=$_POST["group"];
									$email=$_POST["email"];
									$phone_number=$_POST["phone_number"];
									$geolocation=$_POST["geolocation"];
									$status=$_POST["status"];

									$sql=$conexion->query(" update `test_students` set `first_name`='$first_name', `last_name`='$last_name', `lv_id`=$lv_id, `group`='$group', `email`='$email', `phone_number`='$phone_number', `geolocation`='$geolocation', `status`=$status where s_id=$s_id");
									if ($sql==1) {
										header("location:../index.php");
									}else{
										echo "<div class='alert alert-danger'>error al modificar estudiante</div>";
									}	
	}else{ echo "<div class='alert alert-warning'>Campos vacios</div>";}}


