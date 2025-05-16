<?php
session_start();
include 'configuracion.php';

// Recibir los datos del formulario de login
$username = $_POST['username'];
$password = $_POST['password'];

// Encriptar la contraseña ingresada usando SHA1 (aunque se recomienda usar bcrypt en lugar de SHA1)
$password_encripted = hash('sha1', $password);

// Usar consulta preparada para evitar inyección SQL
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND contrasena = ?");
$stmt->bind_param("ss", $username, $password_encripted);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Si se encuentra el usuario, se inicia la sesión
    $datos_usuario = $result->fetch_assoc();
    $_SESSION['usuario'] = $datos_usuario['usuario'];
    header("Location: ../../../index.php");
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

// Cerrar conexión al finalizar
register_shutdown_function(function () use ($conexion) {
    if ($conexion && !$conexion->connect_error) {
        $conexion->close();
    }
});
