<?php 
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_gasto,nombre,gasto,fecha,estado FROM t_gastos";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table" id="tablaListadoFechas">
    <thead>
        
        <th>Nombre</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 

        while($mostrar = mysqli_fetch_array($respuesta)){ 
            $idMonto = $mostrar['id_gasto'];
           
        ?>
        <tr>
            <td><?php echo $mostrar['nombre']; ?></td>
            <td><?php echo "$" .$mostrar['gasto'] .".00"; ?></td>
            <td><?php echo $mostrar['fecha']; ?></td>
            <td>
                
            <?php 
                    $link = "servidor/cambiarEstado.php?idGasto=" .$mostrar['id_gasto'] . "&&fecha=" .$mostrar['fecha'] ."&&estado=";

                    if ($mostrar['estado'] == 0) {
                ?>
                    <a class="btn btn-warning" href="<?php echo $link . "1"; ?>">En proceso</a>
                <?php } else { ?>
                    <a class="btn btn-success" href="<?php echo $link . "0"; ?>">Realizado</a>
                <?php } ?>
        
        
            </td>
            <td>
                <form action="servidor/eliminarmonto.php" method="post">
                    <input type="text" value="<?php echo $idMonto; ?>" name="idEliminar" required hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        <?php
        } 
        ?>
    </tbody>
</table>