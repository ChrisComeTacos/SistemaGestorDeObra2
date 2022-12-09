<?php 

    include("../php/conexion_be.php");

    $id=$_POST['id'];
    $descripcion=$_POST['descripcion'];
    $unidad=$_POST['unidad'];
    $cantidad=$_POST['cantidad'];
    $precio_unitario=$_POST['precio_unitario'];

    $sql="UPDATE presupuesto SET descripcion='$descripcion', unidad='$unidad', cantidad='$cantidad',precio_unitario='$precio_unitario' WHERE id='$id'";
    $query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: presupuesto.php");
    }else{
    
    }

?>