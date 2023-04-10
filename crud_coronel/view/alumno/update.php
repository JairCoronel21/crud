<?php
     require_once("c://xampp/htdocs/crud_coronel/controller/alumnoController.php");
     $obj = new alumnoController();
     $obj->update($_POST['cod'], $_POST['dni'], $_POST['nombre'], $_POST['apellido']);

?>