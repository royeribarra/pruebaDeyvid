<?php
    include_once("conexion.php");
    $con = Conexion::ConexionDB();

    try {
        $sql = "select * from candidatos";
        pg_query($con, $sql);
        return $sql;
    } catch (\Throwable $th) {
        echo "no salio bien";
    }
?>