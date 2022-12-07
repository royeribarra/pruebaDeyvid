<?php
    include_once("conexion.php");
    $con = Conexion::ConexionDB();

    try {
        $sql = "select * from candidatos";
        $result = pg_query($sql) or die('Error message: ' . pg_last_error());

        while ($row = pg_fetch_row($result)) {
            var_dump($row);
        }

        pg_free_result($result);
        pg_close($con);
    } catch (\Throwable $th) {
        echo "no salio bien";
    }
?>