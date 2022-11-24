  <h5 class="text-center alert alert-secondary">Gestor de estudiantes</h5>
	<div class="container-fluid row">
		
		<div class="col-8 m-5">
			
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
             <a href="vista/actualizar-cursos.php?s_id=<?= $datos->s_id ?>" class="btn btn-small btn-primary">cursos</a>
           </td>
           <td>
             <a href="vista/actualizar-estudiantes.php?s_id=<?= $datos->s_id ?>" class="btn btn-small btn-warning">Actualizar</a>
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

<?php include "fin.php" ?>