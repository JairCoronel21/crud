<?php

require_once("c://xampp/htdocs/crud_poo/controller/alumnoController.php");
$obj = new alumnoController();
$obj->delete($_GET['cod_estudiante'])


?>