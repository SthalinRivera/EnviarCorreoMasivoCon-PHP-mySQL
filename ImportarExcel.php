<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>importar excel</title>
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

<body>
    <div class="container">|
        <!-- Start your project here-->
        <div class="card text-center">
            <div class="card-header">Importar Excel</div>
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
    <div class="col-lg-12" id="div_tabla">

    </div>
    <!-- End your project here-->

</body>

</html>