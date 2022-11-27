<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Enviar Correo Masivo</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/richtext.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php include 'view/menu.php'; ?>

    <div class="container pt-4">


        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
                    aria-controls="ex2-tabs-1" aria-selected="true">Evento</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
                    aria-controls="ex2-tabs-2" aria-selected="false">Correos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab"
                    aria-controls="ex2-tabs-3" aria-selected="false">Enviar Correo</a>
            </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">
            <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark"
                            data-mdb-toggle="modal" data-mdb-target="#myModal"><i
                                class="fab fa-plus fa-lg pe-none text-primary"></i> Agregar </button>
                        <?php
                       include('config.php');
                        // Realizamos la consulta para extraer los datos
                        $resultadoEvento =("SELECT * FROM evento");
                        $resultadoEvento=mysqli_query($con,$resultadoEvento);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre evento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  while ($valores = mysqli_fetch_array($resultadoEvento)) {?>
                                <tr>
                                    <th scope="row"> <?php echo $valores['id_evento'];?></th>
                                    <td><?php echo $valores['nombre'];?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                <?php
                     
                        // Realizamos la consulta para extraer los datos
                        $resultadoMail =("SELECT * FROM mail");
                        $resultadoMail=mysqli_query($con,$resultadoMail);
                        ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  while ($valores = mysqli_fetch_array($resultadoMail)) {?>
                        <tr>
                            <th scope="row"> <?php echo $valores['id_mail'];?></th>
                            <td><?php echo $valores['descripcion'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                <!-- Tabs content -->
                <div class="card text-center">
                    <div class="card-header">Seleccionar</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <select class="js-example-basic-single" id="getProducts"
                                    aria-label="Default select example" name="state">
                                    <option disabled selected value="0">Seleccionar Evento:</option>
                                    <?php
                                
                                // Realizamos la consulta para extraer los datos
                                $resultadoEvento =("SELECT * FROM evento");
                                $resultadoEvento=mysqli_query($con,$resultadoEvento);
                                while ($valores = mysqli_fetch_array($resultadoEvento)) {
                                // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                    echo '<option value="'.$valores['id_evento'].'">'.$valores['nombre'].'</option>';
                                }?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="display">
                    <!-- Muestra detalle tabla para enviar correos -->
                </div>
            </div>
        </div>

    </div>

    <!-- Fin Contenido -->
    </div>
    </div>

    </div>
    <!-- ===================-->
    <!--      MODALSS       -->
    <!-- ===================-->
    <!-- Modal EVENTS -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="frmajax" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo evento</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form5Example1" name="nombre" id="nombre" class="form-control" />
                            <label class="form-label" for="form5Example1">Nombre</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Cerrar
                        </button>
                        <button id="btnguardar" value="enviar" class="btn btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    <!-- FIN Modal EVENTS -->
    <!-- Modal MAIL -->
    <!-- FIN Modal MAIL -->
    <br>
    <?php

?>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">

    </script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        // function to get all records from table
        function getAll() {

            $.ajax({
                url: 'controller/getListUser.php',
                data: 'action=showAll',
                cache: false,
                success: function(r) {
                    $("#display").html(r);
                }
            });
        }

        getAll();
        // function to get all records from table

        // code to get all records from table via select box
        $("#getProducts").change(function() {
            var id = $(this).find(":selected").val();

            var dataString = 'action=' + id;

            $.ajax({
                url: 'controller/getListUser.php',
                data: dataString,
                cache: false,
                success: function(r) {
                    $("#display").html(r);
                }
            });
        })
        // code to get all records from table via select box
    });
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#btnguardar').click(function() {
            var datos = $('#frmajax').serialize();

            $.ajax({
                type: "POST",
                url: "controller/setEvent.php",
                data: datos,
                success: function(r) {
                    if (datos = "") {
                        Swal.fire(
                            'Calma!',
                            'No hay datos, Asegurar que tenga datos',
                            'error'
                        )
                    }else{
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
        });
    });
    </script>

</body>

</html>