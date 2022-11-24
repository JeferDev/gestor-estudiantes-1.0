<?php

$usuario = "root"; 
$password = "";   
$servidor = "localhost"; 
$basededatos ="datosestudiantes"; 
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");
$conexion-> set_charset("utf8");

