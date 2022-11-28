<!DOCTYPE html>
<html lang="es">
<?php 
include "view/scrits/header.php";
?>


<body>
    <?php include 'view/menu.php'; 
    require 'config.php'
    ?>

    <div class="container pt-4">
        <!-- Tabs content -->
      
            <!-- Tabs content -->
            <div class="text-center ">
               
             
                        
                        <select class="form-select  " id="getProducts" aria-label="Default select example" name="state">
                            <option disabled selected value="0">Seleccionado todos:</option>
                            <option value="0">No enviados</option>
                            <option value="1">Enviados </option>
                        </select>


                        <div id="display">
                            <!-- Muestra detalle tabla para enviar correos -->
                        </div>
                  
            </div>
  

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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js">
        </script>

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
            });
        });
        </script>

</body>

</html>