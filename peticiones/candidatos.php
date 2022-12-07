<?php
    include("conexion1.php");
    
    class Candidatos {
        protected $conn;
        protected $data = array();
        function __construct() {
            $db = new dbObj();
            $connString =  $db->getConnstring();
            $this->conn = $connString;
        }
        
        public function getCandidatos() {
            $sql = "SELECT * FROM candidatos";
            $queryRecords = pg_query($this->conn, $sql) or die("error to fetch candidatos data");
            $data = pg_fetch_all($queryRecords);
            return $data;
        }
    }
?>