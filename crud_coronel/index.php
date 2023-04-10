<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo POO - Jair Coronel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/635799821b.js" crossorigin="anonymous"></script>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿Estas seguro que quieres eliminar los datos?");
            return respuesta
        }
        

    </script>

<h1 class="text-center p-3">Alumnos</h1>

<div class="container-fluid row">
    <form class="col-4 p-3" method="post" action="view/alumno/store.php">  
        <h3 class="text-center text-secondary">Registro de Alumnos</h3>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Codigo Alumno</label>
        <input type="number" class="form-control" name="cod_estudiante">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail2" class="form-label">DNI Alumno</label>
        <input type="number" class="form-control" name="dni">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail3" class="form-label">Nombres</label>
        <input type="text" class="form-control" name="nombres">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail4" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos">
    </div>
    <button type="submit" class="btn btn-success" name="btnregistrar" value="ok">Registrar</button>
    </form>
    <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-secondary">
                <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Dni</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                 
                 require_once("c://xampp/htdocs/crud_poo/controller/alumnoController.php");
                 $obj = new alumnoController();
                 $rows = $obj->index();
                 ?>
            
            <tbody>
        
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th>
                        <a href="view/alumno/show.php?cod_estudiante=<?= $row[0]?>" class="btn btn-small btn-info"><i class="fa-solid fa-eye"></i></a>
                        <a href="view/alumno/edit.php?cod_estudiante=<?= $row[0]?>" class="btn btn-small btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cod_estudiante<?=$row[0]?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>



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
                                    <a href="view/alumno/delete.php?cod_estudiante=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
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
            </tbody>
        </table>


    </div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>