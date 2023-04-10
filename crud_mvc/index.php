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
    <script>
        function eliminar(){
            var respuesta=confirm("¿Estas seguro que quieres eliminar los datos?");
            return respuesta
        }
        

    </script>

<h1 class="text-center p-3">Alumnos</h1>
<?php 
 include "controller/conexion.php";
 include "model/eliminar.php"
?>
<div class="container-fluid row">
    <form class="col-4 p-3" method="post">  
        <h3 class="text-center text-secondary">Registro de Alumnos</h3>
        <?php
        
        include "model/registro.php";
        ?>
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
    <button type="submit" class="btn btn-info" name="btnregistrar" value="ok">Registrar</button>
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
                include "controller/conexion.php";
                $sql=$conexion->query("SELECT * FROM alumno");
                while($datos=$sql->fetch_object()){ ?>

            
                <tr>
                <th><?= $datos->cod_estudiante?></th>
                <th><?= $datos->dni?></th>
                <th><?= $datos->nombres?></th>
                <th><?= $datos->apellidos?></th>
                <td>
                      <a href="views/update.php?cod_estudiante=<?= $datos->cod_estudiante ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                      <a onclick="return eliminar()" href="index.php?cod_estudiante=<?= $datos->cod_estudiante ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
                </tr>
                <?php } 
                ?>
            </tbody>
        </table>


    </div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>