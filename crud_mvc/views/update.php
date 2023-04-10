<?php
include "../controller/conexion.php";
$cod_estudiante=$_GET["cod_estudiante"];

$sql=$conexion->query("SELECT * FROM alumno where cod_estudiante=$cod_estudiante");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<form class="col-4 p-3 m-auto" method="post">  
        <h3 class="text-center text-secondary">Actualizar Información</h3>

        <div class="mb-3">
               
                <input type="hidden" class="form-control" name="cod_estudiante" value="<?= $_GET["cod_estudiante"]?>">
            </div>
        <?php
         include "../model/actualizar.php";
         while($datos=$sql->fetch_object()){?>
           
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">DNI Alumno</label>
                <input type="number" class="form-control" name="dni" value="<?= $datos->dni?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail3" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" value="<?= $datos->nombres?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail4" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellidos?>">
            </div>
        <?php }
        ?>
    
    <button type="submit" class="btn btn-info" name="btnregistrar" value="ok">Actualizar</button>
    </form>
</body>
</html>
