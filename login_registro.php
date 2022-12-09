<?php

session_start();

if(isset($_SESSION['usuario'])){
  header("location: bienvenido.php");
}

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login y Registro</title>
    <link rel="stylesheet" href="assets/css/estilos.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <main>
      <div class="contenedor__todo">
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar a la página</p>
            <button id="btn__iniciar-sesion">Iniciar sesión</button>
          </div>
          <div class="caja__trasera-register">
            <h3>Más información.</h3>
            <p>Pulsa para conocer todo sobre nosotros.</p>
            <button id="btn__registrarse">Más información</button>
          </div>
        </div>

        <!-- Formulario de login y registro -->
        <div class="contenedor__login-register">
          <!-- login -->
          <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electrónico" name="correo"/>
            <input type="password" placeholder="Contraseña" name="contrasena" />
            <button>Entrar</button>
          </form>
          <!-- registro -->
          <form class="formulario__register">
            <h2><a href="index.html">Aquí puedes conocer más sobre nosotros.</a></h2>
            <!-- <button>Entrar</button> -->
            <!-- <p>Pulsa aquí para informarte de todo lo que JACTORRES ofrece para tí.</p> -->

          </form>
        </div>
      </div>
    </main>
    <script src="assets/js/script.js"></script>
  </body>
</html>
