<?php

   class alumnoController {
         private $model;
         public function __construct(){
             require_once("C://xampp/htdocs/crud_poo/model/alumnoModel.php");
             //inicializacion de la clase
             $this->model = new alumnoModel();
         }
         public function guardar($cod_estudiante, $dni, $nombres, $apellidos){
             $cod_estudiante = $this->model->insertar($cod_estudiante, $dni, $nombres, $apellidos);
             return ($cod_estudiante!=false) ? header("Location:show.php?cod_estudiante=".$cod_estudiante) : header("Location:create.php");   
         }

         public function show($cod_estudiante){
              return ($this->model->show($cod_estudiante) != false) ? $this->model->show($cod_estudiante) : header("Location:index.php");
         }

         public function index(){
             return ($this->model->index()) ? $this->model->index(): false ;
         }

         public function update($cod_estudiante, $dni, $nombres, $apellidos) {
             return ($this->model->update($cod_estudiante, $dni, $nombres, $apellidos) != false) ? header("Location:show.php?cod_estudiante=".$cod_estudiante): header("Location:alumno.php");
         }

         public function delete($cod_estudiante){
             return ($this->model->delete($cod_estudiante)) ? header("Location:alumno.php") :  header("Location:show.php?cod_estudiante=".$cod_estudiante);
         }
   }




?>

