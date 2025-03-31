<?php
$usuario = $_POST['username'];
$contraseña = $_POST['password'];
session_start();
$_SESSION['username'] = $usuario;

include('db.php');

$consulta = "SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:index.php");
} else {
?>
    <?php
    include("login.php");
    ?>
    <h1 style="color: red;">ERROR EN LA AUTENTIFICACIÓN</h1>

<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
