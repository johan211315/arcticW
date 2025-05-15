<?php
$mysqli = new mysqli("localhost", "root", "", "DB_ArcticW_xusi");

if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}
?>
<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$nombre_base_de_datos = "nombre_de_tu_base_de_datos";

$conexion = new mysqli($servidor, $usuario, $contrasena, $nombre_base_de_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
