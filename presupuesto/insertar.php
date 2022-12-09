<?php 
    include("../php/conexion_be.php");

    $id=$_POST['id'];
    $descripcion=$_POST['descripcion'];
    $unidad=$_POST['unidad'];
    $cantidad=$_POST['cantidad'];
    $precio_unitario=$_POST['precio_unitario'];



    $sql="INSERT INTO presupuesto VALUES('$id','$descripcion','$unidad','$cantidad','$precio_unitario')";
    $query=mysqli_query($conexion,$sql);

    if($query){
        Header('Location: presupuesto.php');
    }else{
        
    }

?>