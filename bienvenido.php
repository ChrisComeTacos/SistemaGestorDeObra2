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
    <link rel="stylesheet" href="assets/css/info.css" />
    <script
      src="https://kit.fontawesome.com/1271cb789e.js"
      crossorigin="anonymous"
    ></script>
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
            <img src="assets/img/LogoJACTORRES.svg" alt="" />
            <ul>
            <li><a href="asistencia.php">Sistema de asistencia</a></li>
                <li><a href="#">Reporte fotográfico</a></li>
                <li><a href="#">Presupuesto</a></li>
                <li><a href="registro.php">Registrar admin</a></li>
                <li><a href="php/cerrar_sesion.php" id="selected">Cerrar sesión</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

<!-- <header>
      <div class="container__menu">
        <div class="logo">
          <img src="assets/img/LogoJACTORRES.svg" alt="Logotipo del estudio" />
        </div>
        <div class="menu">
          <nav>
            <ul>
                <li><a href="asistencia.php">Sistema de asistencia</a></li>
                <li><a href="#">Reporte fotográfico</a></li>
                <li><a href="#">Presupuesto</a></li>
                <li><a href="registro.php">Registrar admin</a></li>
                <li><a href="php/cerrar_sesion.php" id="selected">Cerrar sesión</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header> -->
<main>
    <h1>Hola Mundo</h1>
</main>
<script src="assets/js/responsive.js"></script>
</body>
</html>