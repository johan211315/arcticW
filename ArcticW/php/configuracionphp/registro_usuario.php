<?php
include 'configuracion.php';

$nombre = $_POST['user'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

$query = "INSERT INTO usuarios(usuario, correo, contrasena) 
            VALUES ('$nombre', '$correo', '$pass')";

$ejecutar = mysqli_query($conexion, $query);

?>