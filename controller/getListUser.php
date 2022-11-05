<?php

 include('../config.php');

 $action = $_REQUEST['action'];
 
 if($action=="showAll"){
  
  $stmt=('SELECT clients.id, clients.cliente,clients.correo, clients.notificacion FROM clients ORDER BY clients.notificacion');
  $stmt=mysqli_query($con,$stmt);
  
 }else{
  $stmt=("SELECT clients.id, clients.cliente, clients.correo, clients.notificacion, evento.nombre FROM clients, evento WHERE clients.id_evento=evento.id_evento AND clients.id_evento='$action'");
  $stmt=mysqli_query($con,$stmt);
 }
 ?>
<br>
<div class="row">
    <div class="card">
        <div class="card-body">
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

                    <table class="table table-sm table-hover ">
                        <thead class="bg-primary">
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
						if( $stmt->num_rows > 0){
						while($valores = mysqli_fetch_array($stmt))
						{?>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                    <input type="checkbox" name="correo[]" class="CheckedAK"
                                        correo="<?php echo $valores['correo']; ?>"
                                        value="<?php echo $valores['correo']; ?>" />
                                </td>
                                <td><?php echo $valores['cliente']; ?></td>
                                <td><?php echo $valores['correo']; ?></td>
                                <td>
                                    <?php
							echo ($valores['notificacion']) ? '<i class="zmdi zmdi-check-all zmdi-hc-2x green"></i>' : '<i class="zmdi zmdi-check zmdi-hc-2x black"></i>';
							?>
                                </td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </form>
    </div>
</div>
<?php  
 }else{
  ?>
<div class="col-xs-3">
    <div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;">Selecciona un opción valida</div>
    <br />
</div>
<?php  
 }
 ?>
</div>