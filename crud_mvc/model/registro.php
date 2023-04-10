<?php

if(!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["cod_estudiante"]) and !empty($_POST["dni"]) and !empty($_POST["nombres"]) and !empty($_POST["apellidos"])) {
        $cod_estudiante=$_POST["cod_estudiante"];
        $dni=$_POST["dni"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        //si es numerico y texto se estblece en query de forma distinta
        $sql = $conexion->query(" insert into alumno(cod_estudiante, dni, nombres, apellidos)values($cod_estudiante,$dni,'$nombres','$apellidos') ");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Alumno registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Los datos no se han ingresado correctamente</div>';
        }
        
    }else {
        echo '<div class="alert alert-danger">Algunos campos estan vacios, Verificar por favor.</div>';
        
    }
}



?>