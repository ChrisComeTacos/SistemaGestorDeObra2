<?php

include("../php/conexion_be.php");

$id=$_GET['id'];

$sql="SELECT * FROM presupuesto WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/1271cb789e.js"
      crossorigin="anonymous"
    ></script>

    <link href="../assets/css/actualizar.css" rel="stylesheet">

</head>
<body>

<header>
      <div class="container__menu">
        <div class="logo">
          <img src="../assets/img/LogoJACTORRES.svg" alt="Logotipo del estudio" />
        </div>
        <div class="menu">
          <i class="fa-solid fa-bars" id="btn_menu"></i>
          <div id="back_menu"></div>
          <nav id="nav">
            <img src="../assets/img/LogoJACTORRES.svg" alt="" />
            <ul>
              <!-- <li><a href="pdf/pdf.php" id="selected">PDF</a></li> -->
              <li><a href="../Bienvenido.php">Salir</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Ingrese los nuevos datos</h1>
                <br>
                    <form action="update.php" method="POST">

                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                            <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción" value="<?php echo $row['descripcion'] ?>">
                            <select name="unidad" class="form-control">
                                <option value="<?php echo $row['unidad'] ?>"><?php echo $row['unidad'] ?></option>
                                <option value="ML">ML</option>
                                <option value="M2">M2</option>
                                <option value="M3">M3</option>
                            </select>
                                <br>
                            <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad'] ?>">
                            <input type="text" class="form-control mb-3" name="precio_unitario" placeholder="Precio unitario" value="<?php echo $row['precio_unitario'] ?>">

                        <input type="submit" class="btn btn-primary" value="Actualizar">
                    </form>
            </div>
            <div class="col-md-3">
                <div class="imagen-actualizar">
                    <img src="../assets/img/data.svg" alt="" height="700px" width="700px">
                </div>
            </div>
        </div>
</div>

<script src="../assets/js/responsive.js"></script>
</body>
</html>