<?php
    class Conectar{

        protected $dbh;

        protected function Conexion(){
            
            try {
                
                $Conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=g5_20","G5_20","cyMe8YgN"); 
                return $Conectar;

            } catch (Exception $e) {
                print "¡Error BD!: " .$e->getMessage() . "<br/>";
                die();
            }

        }

        public function set_names(){

            return $this->dbh->query("SET NAMES 'utf8'");

        }

    }
?>




 