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
// Después de la conexión a la base de datos
register_shutdown_function(function() use ($conexion) {
    if ($conexion && !$conexion->connect_error) {
        $conexion->close();
    }
});

// Prevenir sesiones no iniciadas correctamente
ini_set('session.use_strict_mode', 1);
mysqli_close($conexion);

// Ejemplo en tu archivo de login (validar_login.php)
session_start();

// Suponiendo que ya validaste el usuario y contraseña
$usuario = $_POST['usuario'];

// Consulta a la base de datos
$query = "SELECT nombre FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['nombre_usuario'] = $fila['nombre']; // Almacenar en sesión
    header("Location: perfil.php");
}
?>
