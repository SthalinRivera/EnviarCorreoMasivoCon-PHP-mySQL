<!DOCTYPE html>
<html lang="es">
<?php include 'view/scrits/header.php'; ?>

<body>
    <?php include 'view/scrits/menu.php'; ?>

    <main style="margin-top: 58px">
        <div class="container pt-4">
            <div class="card">
                <div class="card-header py-3">
                    <h3 class="text-center mb-1 mt-1" style="font-weight: 800; font-size: 35px">
                        Ennviar Correos (Email) de forma Masiva a múltiples usuarios
                      
                    </h3>
                </div>

                <!-- Start your project here-->
                <div class="card text-center">

                    <div class="card-body">





                        <div class="container mt-5">
                            <?php
            include('config.php');
              $QueryInmuebleDetalle = ("SELECT * FROM clients WHERE correo !='' limit 50 ");
              $resultadoInmuebleDetalle = mysqli_query($con, $QueryInmuebleDetalle);
              $cantidad = mysqli_num_rows($resultadoInmuebleDetalle);
            ?>
                            <form action="enviarEmail.php" method="post">

                                <div class="row mb-5">
                                    <div class="col-4">
                                        <input type="checkbox" onclick="marcarCheckbox(this);" />
                                        <label id="marcas">Marcar todos</label>
                                    </div>
                                    <div class="col-4">
                                        <p id="resp"></p>
                                    </div>
                                    <div class="col-4">
                                        <input type="submit" style="display: none;" name="enviarform" id="enviarform"
                                            class="btn btn-round btn-primary btn-block" value="Enviar Emails">
                                    </div>
                                </div>


                                <div class="table-responsive mb-5">
                                    <table class="table  table-hover table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th> # </th>
                                                <th>Cliente</th>
                                                <th>Email</th>
                                                <th>Estatus de Notificación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                          $i = 1;
                          while ($dataClientes = mysqli_fetch_array($resultadoInmuebleDetalle)) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i; ?>
                                                    <input type="checkbox" name="correo[]" class="CheckedAK"
                                                        correo="<?php echo $dataClientes['correo']; ?>"
                                                        value="<?php echo $dataClientes['correo']; ?>" />
                                                </td>
                                                <td><?php echo $dataClientes['cliente']; ?></td>
                                                <td><?php echo $dataClientes['correo']; ?></td>
                                                <td>
                                                    <?php
                                  echo ($dataClientes['notificacion']) ? '<i class="zmdi zmdi-check-all zmdi-hc-2x green"></i>' : '<i class="zmdi zmdi-check zmdi-hc-2x black"></i>';
                                  ?>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php
 include 'view/scrits/footer.php';
?>

</body>

</html>