<?php include "header.php"; ?>

<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light"> Gastos personales</h1>
            <p class="lead">
                <div class="row">
                    <div class="col">
                        <form action="servidor/agregarGasto.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">

                                    <label for="nombre">Nombre o descripcion:</label>
                                    <textarea 
                                        name="nombre" 
                                        id="tarea" 
                                        cols="30" 
                                        rows="3"
                                        required 
                                        class="form-control"
                                       ></textarea>

                                    <label for="gasto">Monto gastado</label>
                                    <input type="number" require class="form-control" name="gasto">

                                    <label for="fecha">Seleccionar Fecha:</label>
                                    <input type="date" required class="form-control" name="fecha">
                                    <br>
                                    <button class="btn btn-info">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="tablaFechas"></div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>

<?php include "footer.php" ?>

<script>
    $(document).ready(function(){
        $('#tablaFechas').load('tablaGastos.php');
    });
</script>