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

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de asistencia</title>
    <script
      src="https://kit.fontawesome.com/1271cb789e.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="assets/css/inicio.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <style>
        .row {
            padding-top: 100px;
        }
    </style>
</head>
<body>
<main class="container-fluid">