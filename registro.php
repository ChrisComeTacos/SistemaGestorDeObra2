<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    
        <script>
        alert("Por favor, debes iniciar sesión.");
        window.location = "login_registro.php";
        </script>
        ';
        session_destroy();
        die();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
      src="https://kit.fontawesome.com/1271cb789e.js"
      crossorigin="anonymous"
    ></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="stylesheet" href="assets/css/actualizar.css" />
  </head>
</head>
<body>
<header>
      <div class="container__menu">
        <div class="logo">
          <img src="assets/img/LogoJACTORRES.svg" alt="Logotipo del estudio" />
        </div>
        <div class="menu">
          <i class="fa-solid fa-bars" id="btn_menu"></i>
          <div id="back_menu"></div>
          <nav id="nav">
            <img src="assets/img/LogoMinimal.svg" alt="" />
            <ul>
              <li><a href="bienvenido.php">Regresar</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    
    <!-- Se tiene que agregar validación para que no se agreguen campos vacíos. -->
<!-- <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
            <h2>Registrarse</h2>
            <br>
            <input type="text" placeholder="Nombre Completo" name="nombre_completo"/>
            <input type="text" placeholder="Correo Electronico" name="correo" />
            <input type="text" placeholder="Usuario" name="usuario" />
            <input type="password" placeholder="Contraseña" name="contrasena" />
            <button>Registrarse</button>
          </form> -->

<div class="tabla">


  <div class="container mt-9">
    <div class="row">
      
      <div class="col-md-8">
         <h1>Ingrese los datos</h1>

         <br>
  
         <form action="php/registro_usuario_be.php" method="POST" class="row g-3">
    <div class="col-md-6">
      <input type="email" class="form-control" name="correo" placeholder="Correo electrónico">
    </div>
    <div class="col-md-6">
      <input type="password" class="form-control" id="contrasena" placeholder="Contraseña">
    </div>
    <div class="col-12">
      <input type="text" class="form-control" name="nombre_completo" placeholder="Nombre completo">
    </div>
    <div class="col-12">
      <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </form>
      </div>
      

  
    </div>
  </div>
</div>







          <script src="assets/js/responsive.js"></script>
</body>
</html>