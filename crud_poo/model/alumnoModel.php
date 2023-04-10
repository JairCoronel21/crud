<?php
   class alumnoModel {
       private $PDO;
       //sirve para ejecutar automaticamente
       public function __construct(){
           //alamacena la conexion a la base de datos
           require_once("c://xampp/htdocs/crud_poo/config/dataBase.php");
           $con = new dataBase();
           //se almacena en PDO 
           $this->PDO = $con->conexion();
       }

       public function insertar($cod_estudiante, $dni, $nombres, $apellidos){
           $stament = $this->PDO->prepare("INSERT INTO alumno VALUES(:cod_estudiante, :dni, :nombres, :apellidos)");
           $stament->bindParam(":cod_estudiante",$cod_estudiante);
           $stament->bindParam(":dni",$dni);
           $stament->bindParam(":nombres",$nombres);
           $stament->bindParam(":apellidos",$apellidos);
           return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
       }
          
       public function show($cod_estudiante){
           $stament = $this->PDO->prepare("SELECT * FROM alumno WHERE cod_estudiante = :cod_estudiante limit 1");
           $stament->bindParam(":cod_estudiante",$cod_estudiante);
           return ($stament->execute()) ? $stament->fetch(): false;
       }

       public function index(){
           $stament = $this->PDO->prepare("SELECT * FROM alumno");
           return ($stament->execute()) ? $stament->fetchAll() : false;
       }

       public function update($cod_estudiante, $dni, $nombres, $apellidos){
           $stament = $this->PDO->prepare("UPDATE alumno SET dni = :dni, nombres = :nombres, apellidos = :apellidos WHERE cod_estudiante = :cod_estudiante");
           $stament->bindParam(":dni",$dni);
           $stament->bindParam(":nombres",$nombres);
           $stament->bindParam(":apellidos",$apellidos);
           $stament->bindParam(":cod_estudiante",$cod_estudiante);
           return ($stament->execute()) ? $cod_estudiante: false;
       }
       
       public function delete($cod_estudiante){
           $stament = $this->PDO->prepare("DELETE FROM alumno WHERE cod_estudiante = :cod_estudiante");
           $stament->bindParam(":cod_estudiante",$cod_estudiante);
           return ($stament->execute()) ? true : false;
       }
   }


?>