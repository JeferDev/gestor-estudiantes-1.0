<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestor de estudiantes</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/e879c3628a.js" crossorigin="anonymous"></script>
</head>
<body>
	<h1 class="text-center p-5">Gestor de estudiantes</h1>
	<div class="container-fluid row">
		
		<div class="col-8 p-4">
			
      <table class="table m-auto">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Grupo</th>
            <th scope="col">Cursos</th>
            <th scope="col">Opciones</th>
            
          </tr>
        </thead>
        <tbody>
         <?php
         include "modelo/conexion.php";
         $sql=$conexion->query("SELECT `s_id`, `first_name`, `last_name`, `group` FROM `test_students`");
         while ($datos=$sql->fetch_object()) {
           ?>
           
           <tr>
            <th scope="row"><?= $datos->s_id?></th>
            <td><?= $datos->first_name?></td>
            <td><?= $datos->last_name?></td>
            <td><?= $datos->group?></td>
            <td>
             <a href="actualizar-cursos.php?s_id=<?= $datos->s_id ?>" class="btn btn-small btn-primary">cursos</a>
           </td>
           <td>
             <a href="actualizar-estudiantes.php?s_id=<?= $datos->s_id ?>" class="btn btn-small btn-warning">Actualizar</a>
           </td>
         </tr>
         <?php
       }
       ?>
     </tbody>
   </table>
 </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>