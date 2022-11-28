<!DOCTYPE html>
<html lang="es">
<?php include 'view/scrits/header.php'?>

<body>
    <?php include 'view/scrits/menu.php'?>
    <main style="margin-top: 58px">
        <div class="container pt-4">

            <div class="card">
                <div class="card-header py-3">
                    <h5 class="text-center " style="font-weight: 800; font-size: 18px">
                        Escribir mail

                    </h5>
                </div>

                <!-- Start your project here-->
                <div class="card text-center">

                    <div class="card-body">
                    </div>

                    <!-- Tabs navs -->
                    <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1"
                                role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Tab 1</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                aria-controls="ex1-tabs-2" aria-selected="false">Tab 2</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                                aria-controls="ex1-tabs-3" aria-selected="false">Tab 3</a>
                        </li>
                    </ul>
                    <!-- Tabs navs -->

                    <!-- Tabs content -->
                    <div class="tab-content" id="ex1-content">
                        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                            aria-labelledby="ex1-tab-1">


                            <input type="text" id="Richtext"/>

                        </div>
                        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                            Tab 2 content
                        </div>
                        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                            Tab 3 content
                        </div>
                    </div>
                    <!-- Tabs content -->
                </div>
            </div>
    </main>



    <?php include 'view/scrits/footer.php'?>
    <script>
        $(document).ready(function(){
        $('#Richtext').richtext();
         });

        
    </script>
</body>

</html>