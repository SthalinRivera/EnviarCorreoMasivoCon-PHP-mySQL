<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usurios</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../../css/admin.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"></script>
    


</head>

<body>
<?php include '../menu.php' ?>
  
        <div class="container pt-4">
            <div class="card">
                <div class="card-header py-3">
                    <h3 class="text-center mb-1 mt-1" style="font-weight: 800; font-size: 35px">
                        Lista
                    </h3>
                </div>
                <?php
                    include('../../config.php');
                    $QueryInmuebleDetalle = ("SELECT * FROM clients WHERE correo !='' limit 50 ");
                    $resultadoInmuebleDetalle = mysqli_query($con, $QueryInmuebleDetalle);
                    $cantidad = mysqli_num_rows($resultadoInmuebleDetalle);
                ?>
                <!-- Start your project here-->
                <div class="card text-center">
                    <div class="card-body">
                        <div class="container mt-5">
                            <table id="example" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Office</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     while ($dataClientes = mysqli_fetch_array($resultadoInmuebleDetalle)) { ?>
                                    <tr>
                                        <td><?php echo $dataClientes['id']; ?> </td>
                                        <td><?php echo $dataClientes['cliente']; ?></td>
                                        <td><?php echo $dataClientes['correo']; ?></td>
                                        <td><?php echo $dataClientes['notificacion']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    < <script>
        $(document).ready(function() {
        $('#example').DataTable({
        autoWidth: false,
        columnDefs: [{
        targets: ['_all'],
        className: 'mdc-data-table__cell',
        }, ],
        });
        }); </script>
</body>

</html>