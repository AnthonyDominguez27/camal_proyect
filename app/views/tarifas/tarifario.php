<style>
/* .table-container {
            display: none;
        } */
</style>
<meta charset="UTF-8">

<?php include_once '../../../config/conexion.php';  ?>

<div class="page-content">

    <div class="container-fluid">

    <!-- Contenedor modal -->
    <div id="contenedor_modal">
    </div>
    <!-- Contenedor modal -->
    <!-- Título de la Página -->
    <div class="mb-3" align="center" style="background-color: #007dc1; padding: 2px;">
    <h4 style="color:white;">PRECIO DE TARIFAS</4>
    </div>
    <!--  Fin Título de la Página -->

    <div class="row align-items-center">
    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
        </div>
    </div>
    </div>
    <!-- end row -->

    <div class="table mb-3">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <!-- Contenedores de las tablas -->
            <div class="table-container">
                <table class="table table-bordered dt-responsive nowrap w-100">
                <thead>
                <tr>
                    <th>COD</th>
                    <th>SERVICIOS PRESTADOS</th>
                    <th>TARIFA</th>
                    <th>VALOR DE VENTA</th>
                    <th>IGV</th>
                    <th>PRECIO DE FINAL (S/)</th>
                </tr>
                </thead>
                <tbody>
                <?php include 'consulta_tarifario.php';?>
                </tbody>
                <!-- Más datos -->
            </table>
            <!-- <button class="btn btn-secondary" id="editarTarifa">Editar Tarifa</button> -->
            </div>
            </div>
        </div>
    </div>
    <!-- end table -->
    </div>
    <!-- end table responsive -->
    </div> <!-- container-fluid -->
</div>