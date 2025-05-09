<?php
// config.php
$servername = "localhost";  // Cambia si es necesario
$username = "root";         // Cambia si tienes un usuario distinto
$password = "";             // Cambia si tienes una contraseña
$dbname = "articdin"; // Cambia al nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
