<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Encriptado de contraseña
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
          VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

// verificar que el correo no se repita en la BD
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' " );

if(mysqli_num_rows($verificar_correo) >0 ){
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location= "../registro.php";
        </script>
        ';
        exit();
}

// verificar que el nombre de usuario no se repita en la BD
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' " );

if(mysqli_num_rows($verificar_usuario) >0 ){
    echo '
        <script>
            alert("Este usuario ya está registrado, intenta con otro diferente");
            window.location= "../registro.php";
        </script>
        ';
        exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("usuario almacenado exitosamente");
            window.location= "../login_registro.php";
        </script>
    
        ';
}else{
   echo '
        <script>
            alert("intentalo de nuevo, usuario no almacenado");
            window.location= "../login_registro.php";
        </script>
    
        ';
}

mysqli_close($conexion);

?>