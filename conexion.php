<?php
    class Conexion
    {
        public static function ConexionDB()
        {
            $host = "localhost";
            $dbname = "votaciones";
            $username = "root";
            $password = "secret";

            try {
                //$conn = new PDO (`pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass`);
                $conn = pg_connect("host=localhost dbname=votaciones user=postgres port=5433 password=secret");
                echo "Se conectó correctamente a la base de datos.";
            } catch (PDOException $exp) {
                echo `No se pudo conectar,` . $exp;
            }

            return $conn;
        }
    }
?>