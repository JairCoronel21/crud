<?php

    class dataBase{
        private $host="localhost";
        private $dbname="BASE";
        private $user="root";
        private $password="1234";
        
        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            }catch(PDOException $e){
               return $e->getMessage();
            }
        }
    }

?>