<?php
  require_once("c://xampp/htdocs/crud_poo/view/head/head.php");
  require_once("c://xampp/htdocs/crud_poo/controller/alumnoController.php");
  $obj = new alumnoController();
  $date = $obj->show($_GET['cod_estudiante']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo MVC - Jair Coronel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/635799821b.js" crossorigin="anonymous"></script>
<body>

<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="alumno.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?cod_estudiante=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?cod_estudiante=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Dni</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["cod_estudiante"]?></td>
            <td scope="col"><?= $date["dni"]?></td>
            <td scope="col"><?= $date["nombres"]?></td>
            <td scope="col"><?= $date["apellidos"]?></td>
        </tr>
    </tbody>
</table>

</body>