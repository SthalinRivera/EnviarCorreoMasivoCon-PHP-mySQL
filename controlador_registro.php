<?php 
require 'modelo_excel.php';
$ME=new Modelo_excel();
$id=htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8');
$nombre=htmlspecialchars($_POST['nombre'],ENT_QUOTES,'UTF-8');
$correo=htmlspecialchars($_POST['correo'],ENT_QUOTES,'UTF-8');
$estado=htmlspecialchars($_POST['estado'],ENT_QUOTES,'UTF-8');
//Cuando encuentra una , lo separa y lo convierte  en arreglo.
$array_id=explode(",",$id);
$array_nomnbre=explode(",",$nombre);
$array_correo=explode(",",$correo);
$array_estado=explode(",",$estado);
 for ($i=0; $i < count($array_id); $i++) { 
    $consulta=$ME->Registrar_Excel($array_id[$i],$array_nombre[$i],$array_correo[$i],$array_estado[$i]);
 }
 echo $consulta;
?>