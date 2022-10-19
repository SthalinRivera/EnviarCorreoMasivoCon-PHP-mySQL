<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
</head>
<?php holas;
?>
<body>


    <div class="container">|
        <div class="row">
            <div class="col-sm-6 col-lg-8">.col-sm-6 .col-lg-8</div>
            <div class="col-6 col-lg-4">.col-6 .col-lg-4</div>
        </div>
        <!-- Start your project here-->
        <div class="card text-center">
            <div class="card-header">Importar Excel</div>
            <div class="card-body">
                <div class="row">
                    <form action="#" enctype="multipart/form-data">
                    <div class="col-lg-10">
                        <input type="file" class="form-control" id="txt-archivo" accept=".csv,.xlsx,.xls" />
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="btn btn-danger" onclick="CargarExcel()">Cargar Excel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End your project here-->

</body>
<script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
      $('input[type="file"]').on('change', function(){
            var ext = $( this ).val().split('.').pop();
            if ($( this ).val() != '') {
            if(ext == "xls" || ext == "xlsx" || ext == "csv"){
            }
            else
            {
                $( this ).val('');
                Swal.fire("Mensaje De Error","Extensión no permitida: " + ext+"","error");
            }
            }
        });
        function CargarExcel() {
            var excel=$("#txt_archivo").val();
            if (excel=="") {
                return Swal.fire("Mensaje De Advertencia","Seleccionar un archivod de Excel: " + ext+"","warning");
            }
            var formData=new FormData();
            var file=$("#txt_archivo")[0].file[0];
            formData.append('archivoexcel',files);
            $.ajax({
                url:'importar_excel_ajax.php',
                type:'post',
                data:formData,
                contentType:false,
                processData:false,
                success:function (resp ) {
                    
                }
            });
            

        }
</script>
</html>