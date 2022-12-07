<?php
    Class dbObj{
        var $servername, $username, $password, $dbname, $port, $conn;

        function __construct()
        {
            $this->servername = "localhost";
            $this->username = "postgres";
            $this->password = "secret";
            $this->dbname = "votaciones";
            $this->port = "5433";
        }
        function getConnstring() {
            $con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            if (pg_last_error()) {
                printf("Connect failed: %s\n", pg_last_error());
                exit();
            } else {
                $this->conn = $con;
            }
            return $this->conn;
        }
    }
?>