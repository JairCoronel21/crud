<?php
  require_once("c://xampp/htdocs/crud_poo/view/head/head.php");
  require_once("c://xampp/htdocs/crud_poo/controller/alumnoController.php");
  $obj = new alumnoController();
  $rows = $obj->index();
?>
<div class="mb-3">
<a href="/crud_poo/view/alumno/create.php" class="btn btn-primary">Agregar nuevo alumno</a>

</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Dni</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>   
        </tr>
    </thead>
    <tbody>
        
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th>
                        <a href="show.php?cod_estudiante=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?cod_estudiante=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cod_estudiante<?=$row[0]?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="cod_estudiante<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al alumno?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez eliminado no se podra recuperar la información
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="delete.php?cod_estudiante=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php
  require_once("c://xampp/htdocs/crud_poo/view/head/footer.php");


?>