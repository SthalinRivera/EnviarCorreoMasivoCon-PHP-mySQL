<?php 
$id=$_GET['id'];

if (!empty($id)) {
    echo $id;
   require '../../config.php';
   $queryDeleteUser=("DELETE FROM `clients`  WHERE id='".$id."' ");
   $result=mysqli_query($con, $queryDeleteUser);
   if (isset($result)) {

   }
  header('Location: ../../lista.php');

}

?>