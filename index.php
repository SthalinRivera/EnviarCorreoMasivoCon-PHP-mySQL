<!DOCTYPE html>
<html lang="es">
<?php 
include 'view/scrits/header.php';
?>

<body>
    <!--Main Navigation-->
    <?php include 'view/menu.php';?>
    <!--Main Navigation-->

    <!--Main layout-->

    <div class="container pt-12">

        <!-- Section: Main chart -->
        <!--Section: Minimal statistics cards-->

        <div class="card text-center">
            <div class="card-header">Crear Correo</div>
            <div class="card-body">
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example1" class="form-control" />
                                <label class="form-label" for="form6Example1">Destinatario</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example2" class="form-control" />
                                <label class="form-label" for="form6Example2">CC-Destinatio</label>
                            </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example3" class="form-control" />
                        <label class="form-label" for="form6Example3">Asunto</label>
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                        <label class="form-label" for="form6Example7">Descripción</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Guardar</button>
                </form>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>

        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-floating btn-lg" data-mdb-toggle="modal"
            data-mdb-target="#myModal">
            <i class="fab fa-airbnb fa-lg pe-none"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo evento</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form5Example1" class="form-control" />
                                <label class="form-label" for="form5Example1">Nombre</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
        <br>
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>Importar Excel</strong></h5>
            </div>
            <style>
            .contenedor-btn-file {
                padding: 50px;
                border: top 100px;

                border: 2px solid #045FB4;
                margin-bottom: 5px;

            }

            .contenedor-btn-file:hover {
                background: #A9D0F5;
            }

            .align-self-center {
                margin-top: 5px;

            }
            </style>
            <!-- Start your project here-->
            <div class="card text-center">
                <div class="card-body">
                    <form action="#" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8 ">
                                <input type="file" class="form-control contenedor-btn-file" id="txt_archivo"
                                    accept=".csv,.xlsx,.xls" name="uploadedfile" />
                            </div>
                            <div class="col-md-4 align-self-center">
                                <a href="#" class="btn btn-danger" onclick="CargarExcel()">Cargar Excel</a>
                                <a href="#" class="btn btn-success" id="btn_registrar" disabled
                                    onclick="GuardarExcel()">Guardar Datos</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12" id="div_tabla"></div>
    </div>

    <?php include 'view/footer.php';?>
    <?php 
include 'view/scrits/footer.php';
?>


    <script>
    document.getElementById("txt_archivo").addEventListener("change", () => {
        var fileName = document.getElementById("txt_archivo").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();

        if (extFile == "xlsx" || extFile == "xlsx") {

        } else {
            Swal.fire(
                'Mensaje de advertencia',
                'Solo se aceptan archos excel- Usted subio un archivo con extencion' + extFile,
                'warning'
            )
            document.getElementById("txt_archivo").value = "";
        }
    });

    function CargarExcel() {
        let archivo = document.getElementById('txt_archivo').value;
        if (archivo == '') {
            return Swal.fire("Mensaje De Advertencia", "Seleccionar un archivod de Excel: ", "warning");
        }
        let formData = new FormData();
        let excel = $("#txt_archivo")[0].files[0];
        formData.append('excel', excel);

        $.ajax({
            url: 'importar.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resp) {
                $("#div_tabla").html(resp);
                document.getElementById('btn_registrar').disabled = false;
            }
        });
        return false;

    }

    function GuardarExcel() {
        var contador = 0;
        var arreglo_id = new Array();
        var arreglo_nombre = new Array();
        var arreglo_correo = new Array();
        var arreglo_estado = new Array();

        $("#tabla_detalle tbody#tbody_tabla_detalle tr").each(function() {
            arreglo_id.push($(this).find('td').eq(0).text());
            arreglo_nombre.push($(this).find('td').eq(1).text());
            arreglo_correo.push($(this).find('td').eq(2).text());
            arreglo_estado.push($(this).find('td').eq(3).text());
            contador++;
        })
        if (contador == 0) {
            Swal.fire(
                'Mensaje de Advertencia',
                'La tabla tiene tiene que tener como minimmo 1 dato',
                'warning'
            )
        }

        alert(arreglo_id);

        var id = arreglo_id.toString();
        var nombre = arreglo_nombre.toString();
        var correo = arreglo_correo.toString();
        var estado = arreglo_estado.toString();
        $.ajax({
            url: 'controlador_registro.php',
            type: 'post',
            data: {
                id: id,
                nombre: nombre,
                correo: correo,
                estado: estado
            }
        })

    }
    </script>


</body>

</html>