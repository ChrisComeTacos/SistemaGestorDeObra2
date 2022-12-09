<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    
        <script>
        alert("Por favor, debes iniciar sesión.");
        window.location = "../login_registro.php";
        </script>
        ';
        session_destroy();
        die();

}

    include("../php/conexion_be.php");


    $sql="SELECT id, descripcion, unidad, cantidad, precio_unitario, cantidad * precio_unitario AS subtotal FROM presupuesto";
    $query=mysqli_query($conexion,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto</title>
    <link href="../assets/css/actualizar.css" rel="stylesheet">

    <script
      src="https://kit.fontawesome.com/1271cb789e.js"
      crossorigin="anonymous"
    ></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
            <img src="../assets/img/LogoMinimal.svg" alt="" />
            <ul>
              <!-- <li><a href="pdf/pdf.php" id="selected">PDF</a></li> -->
              <li><a href="../Bienvenido.php">Salir</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
<main>
  <div class="tabla">
  <div class="container mt-2">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese los datos</h1>
                <br>
                    <form action="insertar.php" method="POST">
                      <input type="text" class="form-control mb-3" name="id" placeholder="id">
                        <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción">
                        <select class="form-select" name="unidad" aria-label="Floating label select example">
                          <option value="">--Selecciona la unidad--</option>
                          <option value="ML">ML</option>
                          <option value="M2">M2</option>
                          <option value="M3">M3</option>
                        </select>
                        <br>
                        <input type="text" class="form-control mb-3" id="cantidad" name="cantidad" placeholder="Cantidad">
                        <input type="text" class="form-control mb-3" id="precio_unitario" name="precio_unitario" placeholder="Precio unitario">
                        <br>
                        <input type="submit" class="btn btn-primary">
                    </form>
                    <br>

                    <h1>Ingrese el cliente</h1>
                    <form action="pdf/pdf.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombre_cliente" placeholder="Cliente">
                    <div class="form-floating">
                      <select class="form-select" name="agregar_iva" aria-label="Floating label select example">
                        <option value="0" selected>No mostrar I.V.A</option>
                        <option value="0.16">16%</option>
                      </select>
                      <label for="floatingSelect">Selecciona el valor del I.V.A</label>
                    </div>
                    <br>
                    <input type="submit" value="Crear PDF" class="btn btn-primary">
                    <?php 

                    ?>
                    </form>
            </div>
            <div class="col-md-9">
              <div class="table-responsive sm">
              <table class="table">
                    <thead class="table-secondary table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                            <th>Precio unitario</th>
                            <th>Subtotal</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $total =0;

                            while($row=mysqli_fetch_array($query)) {
                            $total = $total + $row['subtotal'];
                        ?>
                        <tr>
                            <th><?php echo $row['id'] ?></th>
                            <th><?php echo $row['descripcion'] ?></th>
                            <th><?php echo $row['unidad'] ?></th>
                            <th><?php echo $row['cantidad'] ?></th>
                            <th>$<?php echo number_format($row['precio_unitario'], 2, '.', ','); ?></th>
                            <th>$<?php echo number_format($row['subtotal'], 2, '.', ','); ?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
                <input class="form-control" value="Total: $<?php echo number_format($total, 2, '.', ','); ?>" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
            </div>
        </div>
</div>
  </div>

</main>
<script src="../assets/js/responsive.js"></script>
</body>
</html>