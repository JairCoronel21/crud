<?php
   require_once("c://xampp/htdocs/crud_coronel/controller/alumnoController.php");
   $obj = new alumnoController();
   $obj->guardar($_POST['cod_estudiante'], $_POST['dni'], $_POST['nombres'], $_POST['apellidos']);

  
?>