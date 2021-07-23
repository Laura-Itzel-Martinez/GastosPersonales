<?php
   
    $nombre = $_POST['nombre'];
    $gasto = $_POST['gasto'];
    $fecha = $_POST['fecha'];
    

    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_gastos (nombre,gasto,fecha) VALUES ('$nombre','$gasto','$fecha')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar nada !";
    }
?>