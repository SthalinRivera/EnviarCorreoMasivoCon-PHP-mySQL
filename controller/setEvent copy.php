
<?php
include '../config.php';
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["nombre"]) and $_POST["nombre"] !="" ){

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$nombre = $_POST["nombre"];

//Preparamos la orden SQL
$consulta = "INSERT INTO evento
(nombre) VALUES ('$nombre')";
echo mysqli_query($con,$consulta);

if ($consulta =!"") {
    echo "<p>Agregado...</p>";
    
header("Location:../EnviarCorreoUsuarios.php");
}else {
    echo "<p>No se agregó...</p>";
}
} else {

echo '<p>Por favor, complete el formulario</p>';
}
?>