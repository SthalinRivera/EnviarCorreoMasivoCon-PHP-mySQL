<!DOCTYPE html>
<html lang="es">
<?php 
include 'view/scrits/header.php';
?>

<body>
    <!--Main Navigation-->
    <?php include 'view/menu.php';?>
    <!--Main Navigation-->
    <div class="container pt-16">
        <!--Main layout-->
        <br>
        <h1 class="text-center"><strong>Enviar correo masivo (GMAIL) personalizado</strong></h1>
        <br>
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">

            </div>
        </div>
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>Importar Excel </strong></h5><br>
                

            </div>
            <style>
            .contenedor-btn-file {
                padding: 80px;
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
                                    <a href="view/importarExcel/descargarExcelModelo.php">Descargar Modelo de Excel <i class="fa fa-download"></i></a>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <a href="#" class="btn btn-danger" onclick="CargarExcel()"><i class="fa fa-upload"></i>
                                    Cargar Excel</a>
                                <a href="#" class="btn btn-success" id="btn_registrar" disabled
                                    onclick="GuardarExcel()"><i class="fa fa-check-double"></i> Guardar Datos</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12" id="div_tabla"></div>
    </div>


    <?php include 'view/footer.php';?>
    <?php include 'view/scrits/footer.php';?>

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
            url: 'view/importarExcel/importar.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resp) {
                $("#div_tabla").html(resp);
              
                $("#btn_registrar").each(function(){
                    this.disabled = false;
                });
            }
        });
        return false;

    }

    function GuardarExcel() {
        var dataString="guardar";  
        alert(dataString);
        $.ajax({
                    type: "POST",
                    url: "view/importarExcel/importar.php.php",
                    data: dataString,
               
                    success: function(r) {
                        if (dataString = "") {
                            Swal.fire(
                                'Calma!',
                                'No hay datos, Asegurar que tenga datos',
                                'error'
                            )
                        } else {
                            if (r == 1) {
                                Swal.fire(
                                    'Registrado',
                                    'Se registro correctamente',
                                    'success'
                                )
                            } else {

                                alert("Fallo el server");
                            }
                        }
                    }
                });
                return false;
            }
    </script>


</body>

</html>