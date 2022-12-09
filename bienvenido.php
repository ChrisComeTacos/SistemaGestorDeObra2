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
    <title>Bienvenido</title>
    <link rel="stylesheet" href="assets/css/actualizar.css" />
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
          <img src="assets/img/LogoJACTORRES.svg" alt="Logotipo del estudio" />
        </div>
        <div class="menu">
          <i class="fa-solid fa-bars" id="btn_menu"></i>
          <div id="back_menu"></div>
          <nav id="nav">
            <img src="assets/img/LogoMinimal.svg" alt="" />
            <ul>
              <li><a href="index.html">Página principal</a></li>
              <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

<main>

<div class="menu_principal">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <div class="menuIzquierdo">
          
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 ">
      <img src="assets/img/asistencia.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><b>Registro de asistencia</b></h5>
        <p class="card-text">Registra cada día a los trabajadores que asisten a la obra y lleva la cuenta de las inasistencias o asistencias que tiene cada uno entre determinada fecha.</p>
      <a href="asistencia.php" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 ">
      <img src="assets/img/reporte.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><b>Reporte fotográfico</b></h5>
        <p class="card-text">Crea álbumes de fotos y guarda en ellas los avances que ha tenido la obra.</p>
      <a href="reporte/index.php" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 ">
      <img src="assets/img/presupuesto.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><b>Presupuesto</b></h5>
        <p class="card-text">Ingresa los datos de los materiales o mano de obra que quieres que aparezcan en tu formato PDF de presupuesto. El total y el IVA son calculados automáticamente para tu mayor comodidad.</p>
      <a href="presupuesto/presupuesto.php" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 ">
      <img src="assets/img/registro.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><b>Registro de usuario</b></h5>
        <p class="card-text">Registra un nuevo usuario al panel de administrador.</p>
      <a href="registro.php" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
      <div class="col-md-4">
        <div class="menuDerecho">
          <div class="imagenBienvenido">
            <img src="assets/img/AnalisisVector.svg" alt="">
            <div class="textoVector">
              <h3>Aquí encontrarás todas las funciones para la gestión de tu obra, pulsa en una de ellas para entrar.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="assets/js/responsive.js"></script>
</body>
</html>