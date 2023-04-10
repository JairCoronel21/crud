<?php
  require_once("c://xampp/htdocs/crud_coronel/controller/alumnoController.php");
  $obj = new alumnoController();
  $user = $obj->show($_GET['cod_estudiante']);

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
<form class="col-4 p-3 m-auto" action="update.php" method="post" autocomplete="off">
    <h2>Modificando Alumno</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-10">
        <input type="text" name="cod" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword1" class="col-sm-2 col-form-label">Dni:</label>
        <div class="col-sm-10">
            <input type="number" name="dni" class="form-control" id="inputPassword1" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword2" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword2" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nuevo Apellido</label>
        <div class="col-sm-10">
            <input type="text" name="apellido" class="form-control" id="inputPassword3" value="<?= $user[3]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-info" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="../../index.php">Cancelar</a>
    </div>
  </form>
</body>