<?php
    include_once("conexion.php");
    $con = Conexion::ConexionDB();

    $nombresApellidos = $_POST['nombresApellidos'];
    $alias = $_POST['alias'];
    $rut = $_POST['rut'];
    $email = $_POST['email'];
    $region = $_POST['region'];
    $comuna = $_POST['comuna'];
    $candidato = $_POST['candidato'];
    $razon = $_POST['razon'];

    try {
        $sql = "insert into votos values('$nombresApellidos', '$alias', '$rut', '$email', '$region', '$comuna', '$candidato', '$razon', DEFAULT)";
        pg_query($con, $sql);
        echo "guardé";
    } catch (\Throwable $th) {
        echo "no salio bien";
    }
    
    
?>