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
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>SISTEMA</strong></h5>
                    </div>
                    <h3 class="text-center mb-5" style="font-weight: 800; font-size: 35px">
                        Ennviar Correos (Email) de forma Masiva a múltiples usuarios
                        <hr>
                    </h3>
                </div>
            </section>
            <!-- Section: Main chart -->

            <!--Section: Minimal statistics cards-->
            <section>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-users text-info fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>00</h3>
                                        <p class="mb-0">Nuevos Usuarios</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="far fa-user text-warning fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>00</h3>
                                        <p class="mb-0">Usuarios</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-thumbs-down text-danger fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>00</h3>
                                        <p class="mb-0">Correos no enviados</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-envelope text-success fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>00</h3>
                                        <p class="mb-0">Correo eviados</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!--Section: Minimal statistics cards-->
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Importar Excel</strong></h5>
                </div>

                <!-- Start your project here-->
                <div class="card text-center">

                    <div class="card-body">

                        <form action="#" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6 col-lg-8">
                                    <input type="file" class="form-control" id="txt_archivo" accept=".csv,.xlsx,.xls" />
                                </div>
                                <div class="col-6 col-lg-2">
                                    <a href="#" class="btn btn-danger" onclick="CargarExcel()">Cargar Excel</a>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <a href="#" class="btn btn-success" id="btn_registrar" disabled
                                        onclick="GuardarExcel()">Guardar Datos</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" id="div_tabla"></div>

    </main>
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