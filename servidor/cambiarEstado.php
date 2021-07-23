<?php 

    $idGasto = $_GET['idGasto'];
    $estado = $_GET['estado'];
   
    
    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_gastos SET estado = '$estado' WHERE id_gasto = '$idGasto'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        $link = "../index.php?idGasto=" . $idGasto;
        header("location:" . $link);
    } else {
        echo "No pudo actualizarse, por tu culpa :(";
    }

?>