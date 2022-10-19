<?php 
if(is_array($_FILES['archivoexcel']) && count($_FILES['archivoexcel'])>0){
    require_once 'PHPExcel/classes/PHPExcel';
    require_once 'config.php';
    $tmtfname=$_FILES['archivoexcel']['tmp_name'];
    
}
?>