<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
include "view/scrits/header.php";
?>
</head>

<body>
    <?php include 'view/menu.php' ?>
    <div class="container pt-4">
        <div class="card">
            <div class="card-header py-3">
                <p class="text-center mb-1 mt-1" style="font-weight: 800; font-size: 14px">
                    Lista de usuarios
                </p>
            </div>
            <?php
                    include('config.php');
                    $QueryInmuebleDetalle = ("SELECT * FROM clients WHERE correo !='' limit 50 ");
                    $resultadoInmuebleDetalle = mysqli_query($con, $QueryInmuebleDetalle);
                    $cantidad = mysqli_num_rows($resultadoInmuebleDetalle);
                ?>
            <!-- Start your project here-->
            <div class="card text-center">
                <div class="card-body">
                    <div class="container">
                        <table id="example" class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Perfil</th>
                                    <th>Mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     while ($dataClientes = mysqli_fetch_array($resultadoInmuebleDetalle)) { ?>
                                <tr>
                                    <td><?php echo $dataClientes['cliente']; ?></td>
                                    <td><?php echo $dataClientes['correo']; ?></td>
                                    <td><?php echo $dataClientes['perfil']; ?></td>
                                    <td><?php echo $dataClientes['mail']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Perfil</th>
                                    <th>Mail</th>   
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