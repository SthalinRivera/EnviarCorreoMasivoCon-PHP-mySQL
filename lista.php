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
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Perfil</th>
                                    <th>Mail</th>
                                    <th>Acción</th>
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
                                    <td>
                                    <a href="controller/lista/deleteuser.php?id=<?php echo $dataClientes['id'];?>"><i class="fa fa-trash has-text-danger"></i></a></a>
                                    <a href="controller/lista/viewUser.php?id=<?php echo $dataClientes['id'];?>"><i class="fa fa-eye"></i></a></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Perfil</th>
                                    <th>Mail</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            autoWidth: false,
            columnDefs: [{
                targets: ['_all'],
                className: 'mdc-data-table__cell',
            }, ],
        });
    });
    </script>
    
    <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
    </script>
</body>

</html>