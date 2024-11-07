<!DOCTYPE html>
<html lang="es">
<!-- <meta charset="UTF-8"> -->
<body>

<div class="page-content">
<div class="container-fluid">
    <form id="service-form">
        <div class="modal-content">
            <!-- Título de la Página -->
                <div class="mb-3" align="center" style="background-color: #007dc1; padding: 5px;">
                    <h4 style="color:white;">Registrar Servicio</button>
                </div>
            <!--  Fin Título de la Página -->
            <div class="modal-body">
            <div class="row">
            
            

                <!-- Columna para TIPO DE SERVICIO -->
                <div class="col-md-4">
                    <div class="card">
                       
                        
                <!-- Columna del tipo de servicio -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-mb-5">
                                    <label class="form-label" for="nombre">Seleccione tipo de servicio: </label>
                                    <a href="#" class="showTable" style="color: white;">
                                        <select name="tipoAnimal" id="tipoAnimal" class="form-select" onchange="actualizarTipoServicio()" required>
                                            <option value="">Seleccione...</option>
                                            <?php
                                                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                                    echo "<option value='" . $row['idTipoServicio'] . "' data-tipo='" . $row['tipo'] .
                                                    "' data-NombreServicio='" . $row['nombreServicio'] .
                                                    "' data-Tarifa='" . $row['tarifa'] .
                                                    "' class='" . $row['showTable'] . "'>" . $row['cod_serv'] . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </a>
                                    <div class="mb-3">
                                        <!-- Tipo "hidden" para ocultar los campos -->
                                        <input type="hidden" class="form-control" id="idTipoServicioInput" name="idTipoServicio" placeholder="ID - Animal" readonly>
                                        <input type="hidden" class="form-control" id="TipoInput" name="TipoInput" placeholder="Tipo de Animal" readonly>
                                        <input type="hidden" class="form-control" id="NombreInput" name="NombreInput" placeholder="Nombre de Servicio" readonly>
                                        <input type="number" class="form-control" id="Tarifa" name="Tarifa" placeholder="Monto de Tarifa" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                
                        
                    </div>
                    
                </div> 
 <!-- Columna para COMERCIANTE -->
 <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-mb-5">
                                    <label class="form-label" for="nombre">Seleccione Comerciante: </label>

                                    <!-- <template id="listtemplate">
                                    </template> -->
                                    <input type="search" id="myprod" name="myprod" list="listprod" class="form-control" onchange="actualizarCampos()" placeholder="Buscar Comerciante">
                                    <datalist id="listprod">
                                        <option value="">Seleccione...</option>
                                       
                                    </datalist>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" data-send="true" id="idPersona" name="idPersona" placeholder="ID-Personal" readonly>
                                        <label class="form-label" for="nombre">Nombres</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="dni">DNI</label>
                                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese DNI" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="ruc">RUC (Opcional)</label>
                                        <input type="text" class="form-control" id="ruc" name="ruc" placeholder="Ingrese RUC" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                

                                        <!-- KILOS CONTAINER  -->
                                                
            </div>
            </div>

        <!-- /.modal-content AQUI IBA -->

            <div class="table-responsive mb-4">
                <table id="datatable_detalle" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Comerciante</th>
                            <th>ID-Servicio</th>
                            <th>Nombre del Servicio</th>
                            <th>N&uacute;mero de animales</th>
                            <th>Kilos de Carne</th>
                            <th>Kilos de Piel</th>
                            <th>Tarifa</th>
                            <th>IGV</th>
                            <th>Total</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Aquí se registran los servicios -->
                    </tbody>

                </table>

                    <label id="111" for="IGV">IGV:</label>
                    <input type="number" class="form-control" data-send="true" id="igv_total" name="igv_total" placeholder="IGV" readonly>
                    <label id="222" for="TOTAL">Total:</label>
                    <input type="number" class="form-control" data-send="true" id="total_total" name="total_total" placeholder="Total" readonly>
                    <br>

                    <div class="mb-3" align="center">
                        <button type="button" class="btn btn-primary" onclick="enviarDatosAlServidor()">Registrar Servicio</button>
                    </div>

                <!-- end table -->
            </div>
        </div><!-- /.modal-content -->
    </form>

</div>
</div>

<script>
        function actualizarCampos() {
            var input = document.getElementById("myprod");
            var datalist = document.getElementById("listprod");
            var selectedOption;

            // Busca la opción seleccionada en el datalist
            for (var i = 0; i < datalist.options.length; i++) {
                if (datalist.options[i].value === input.value) {
                    selectedOption = datalist.options[i];
                    break;
                }
            }

            // Si se encuentra la opción seleccionada, asigna los valores a los elementos correspondientes
            if (selectedOption) {
                document.getElementById("idPersona").value = selectedOption.getAttribute("data-idPersona");
                document.getElementById("nombre").value = selectedOption.getAttribute("data-nombre");
                document.getElementById("apellidos").value = selectedOption.getAttribute("data-apellidos");
                document.getElementById("dni").value = selectedOption.getAttribute("data-dni");
                document.getElementById("ruc").value = selectedOption.getAttribute("data-ruc");
            }
        }

        $(document).ready(function(){
            $("select[name='tipoAnimal']").change(function(){
                var targetTable = $(this).val(); // Obtén el valor seleccionado del select
                $(".table-container").hide();
                $("#" + targetTable).show(); // Suponiendo que el valor seleccionado coincide con el ID de la tabla que deseas mostrar
            });
        });

        function actualizarTipoServicio() {
            var select = document.getElementById("tipoAnimal");
            var selectedOption = select.options[select.selectedIndex];

            // Obtener el valor de idTipoServicio
            var idTipoServicio = selectedOption.getAttribute("value");
            var tarifa = selectedOption.getAttribute("tarifa");

            // Asignar el valor al input
                document.getElementById("idTipoServicioInput").value = idTipoServicio;
                document.getElementById("TipoInput").value = selectedOption.getAttribute("data-tipo");
                document.getElementById("NombreInput").value = selectedOption.getAttribute("data-NombreServicio");
                document.getElementById("Tarifa").value = selectedOption.getAttribute("data-Tarifa");
        }
</script>


</body>
</html>