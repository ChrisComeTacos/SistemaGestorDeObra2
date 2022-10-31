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
    <link rel="stylesheet" href="assets/css/inicio.css" />
</head>
<body>
<header>
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
    </header>
    
    <!-- Se tiene que agregar validación para que no se agreguen campos vacíos. -->
<form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name="nombre_completo"/>
            <input type="text" placeholder="Correo Electronico" name="correo" />
            <input type="text" placeholder="Usuario" name="usuario" />
            <input type="password" placeholder="Contraseña" name="contrasena" />
            <button>Registrarse</button>
            <br>
            <a href="login_registro.php">Regresar </a>
          </form>

</body>
</html>