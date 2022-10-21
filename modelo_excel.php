<?php 

class Modelo_excel{
    function __construct()
    {
        require_once 'modelo_conexcion.php';
        $this->conexion=new conexion();
        $this->conexion->conectar();
    }



    function Registrar_Excel($id,$nombre,$correo,$estado){
        $sql = "call PA_REGISTRAR_USUARIO_EXCEL('$id','$nombre','$correo','$estado')";
        if ($resultado = $this->conexion->conexion->query($sql)){
            $id_retornado = mysqli_insert_id($this->conexion->conexion);
            return 1;
        }
        else{
            return 0;
        }
        $this->conexion->Cerrar_Conexion();
    }
}


?>