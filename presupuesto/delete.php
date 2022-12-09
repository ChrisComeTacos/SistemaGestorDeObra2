<?php 

include("../php/conexion_be.php");

$id=$_GET['id'];

$sql="DELETE FROM presupuesto WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: presupuesto.php");
}else{

}

?>
