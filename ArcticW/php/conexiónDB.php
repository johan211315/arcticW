<?php
$conexion = new mysqli("localhost", "root", "", "base3php");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
