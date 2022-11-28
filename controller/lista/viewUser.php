<?php
 require '../../config.php' ;
$id= $_GET['id'];
$queryViewUser= ("SELECT * FROM clients WHERE id='".$id."' ");
$resultViewUser = mysqli_query($con,$queryViewUser );
$cantidad = mysqli_num_rows($resultViewUser);

?>

   
<!DOCTYPE html>
    <html lang="es">
    <head>
    <title>Envio de email de forma masiva - Urian Viera</title>';
$cuerpo .= ' 
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .btnlink{
        padding:15px 30px;
        text-align:center;
        background-color:#cecece;
        color: crimson !important;
        font-weight: 600;
        text-decoration: blue;
    }
    .btnlink:hover{
        color: #fff !important;
    }
    .imgBanner{
        width:100%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px;
    }
    .misection{
        color: #34495e;
        margin: 4% 10% 2%;
        text-align: center;
        font-family: sans-serif;
    }
    .mt-5{
        margin-top:50px;
    }
    .mb-5{
        margin-bottom:50px;
    }
    </style>
';

$cuerpo .= '
</head>
<body>
    <div class="contenedor">
   <!-- <img class="imgBanner" src="https://catmanshopper.com/enviosmasivosdecorreos/imgs/banner2.png">
        <p>&nbsp;</p>
        <p>&nbsp;</p>-->

    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
        <td style="padding: 0">
            <!-- <img style="padding: 0; display: block" src="https://catmanshopper.com/enviosmasivosdecorreos/imgs/banner.jpg" width="100%">-->
        </td>
    </tr>
  
  <?php  while ($dataUser = mysqli_fetch_array($resultViewUser)) {
  ?>
    
    <tr>
        <td style="background-color: #ffffff;">
            <div class="misection">
                <h2 style="color: red; margin: 0 0 7px">Hola, <?php echo $dataUser['cliente'];?></h2>
                <p style="margin: 2px; font-size: 18px"><?php echo $dataUser['mail']; ?></p>
            </div>
        </td>
    </tr>
    <?php }
    ?>
    <tr>
        <td style="background-color: #ffffff;">
        
        
        <div class="mb-5 misection">  
          <p>&nbsp;</p>
          <!--  <a href="https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA" class="btnlink">Visitar Canal </a>-->
        </div>

        </td>
    </tr>
    <tr>
        <td style="padding: 0;">
           <!--  <img style="padding: 0; display: block" src="https://catmanshopper.com/enviosmasivosdecorreos/imgs/footer.png" width="100%">-->
        </td>
    </tr>
</table>'; 

$cuerpo .= '
      </div>
    </body>
  </html>

 


