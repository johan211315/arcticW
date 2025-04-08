<?php
session_start();
include 'configuracion.php';

// Recibir los datos del formulario de login
$username = $_POST['username'];
$password = $_POST['password'];

// Encriptar la contraseña ingresada usando SHA1
$password_encripted = hash('sha1', $password);

// Realizar la consulta para verificar el usuario y la contraseña
$query = "SELECT * FROM usuarios WHERE usuario='$username' AND contrasena='$password_encripted'";
$result = mysqli_query($conexion, $query);

if(mysqli_num_rows($result) > 0){
    // Si se encuentra el usuario, se inicia la sesión
    $datos_usuario = mysqli_fetch_assoc($result);
    $_SESSION['usuario'] = $datos_usuario['usuario'];
    header("location: ../../../index.php");
    exit;
} else {
    // Si no coincide el usuario o la contraseña, se muestra un mensaje de error
    echo '
    <script>
        alert("Usuario o contraseña incorrectos, intentalo de nuevo");
        window.location = "../login.php";
    </script>
    ';
    exit;
}

mysqli_close($conexion);
?>
