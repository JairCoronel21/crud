<?php

if (!empty($_GET["cod_estudiante"])) {
    $cod_estudiante=$_GET["cod_estudiante"];
    $sql=$conexion->query(" delete from alumno where cod_estudiante=$cod_estudiante");
    if ($sql==1) {
        echo '<div class="alert alert-success">Alumno eliminado correctamente</div>';
    } else {
        echo "<div>Error al eliminar</div>";
    }
    
}


?>