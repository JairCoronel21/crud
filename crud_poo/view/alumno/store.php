<?php
   require_once("c://xampp/htdocs/crud_poo/controller/alumnoController.php");
   $obj = new alumnoController();
   $obj->guardar($_POST['cod'], $_POST['dni'], $_POST['nombre'], $_POST['apellido']);
  
?>