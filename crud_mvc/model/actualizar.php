<?php

  if(!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["cod_estudiante"]) and !empty($_POST["dni"]) and !empty($_POST["nombres"]) and !empty($_POST["apellidos"])) {
        $cod_estudiante=$_POST["cod_estudiante"];
        $dni=$_POST["dni"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        //si es numerico y texto se estblece en query de forma distinta
        $sql = $conexion->query(" update alumno set dni=$dni, nombres='$nombres',apellidos='$apellidos' where cod_estudiante=$cod_estudiante");
        //si es 1 significa que se ejecuto la acción
        if ($sql == 1) {
            header("Location:../index.php");
        } else {
            echo '<div class="alert alert-danger">Error al actualizar la información</div>';
        }
    }else {
        echo '<div class="alert alert-danger">Algunos campos estan vacios, Verificar por favor.</div>';
        
    }
  }







?>