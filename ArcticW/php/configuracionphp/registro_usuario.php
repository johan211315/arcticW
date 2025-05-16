<?php
include 'configuracion.php';

// Validar campos requeridos
if (!isset($_POST['user'], $_POST['correo'], $_POST['pass'])) {
    echo '
    <script>
        alert("Todos los campos son obligatorios.");
        window.location = "../register.php";
    </script>
    ';
    exit;
}

$nombre = mysqli_real_escape_string($conexion, trim($_POST['user']));
$correo = mysqli_real_escape_string($conexion, trim($_POST['correo']));
$pass = $_POST['pass'];

// Validar formato de correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo '
    <script>
        alert("Correo electrónico no válido.");
        window.location = "../register.php";
    </script>
    ';
    exit;
}

// Validar requisitos de contraseña
if (
    strlen($pass) < 8 ||
    !preg_match('/[A-Z]/', $pass) ||
    !preg_match('/[a-z]/', $pass) ||
    !preg_match('/[0-9]/', $pass)
) {

    echo '
    <script>
        alert("La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula y un número.");
        window.location = "../register.php";
    </script>
    ';
    exit;
}

// Encriptar la contraseña utilizando SHA1 (mejor usar password_hash a futuro)
$pass_encripted = hash('sha1', $pass);

// Verificar si el nombre de usuario ya existe
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$nombre' ");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo ' 
        <script>
            alert("Este usuario ya ha sido registrado, intenta con otro diferente.");
            window.location = "../register.php";
        </script>
    ';
    exit();
}

// Insertar nuevo usuario
$query = "INSERT INTO usuarios(usuario, correo, contrasena) 
            VALUES ('$nombre', '$correo', '$pass_encripted')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Usuario almacenado exitósamente");
        window.location = "../login.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Intentalo de nuevo, usuario no almacenado");
        window.location = "../register.php";
    </script>
    ';
}

mysqli_close($conexion);
