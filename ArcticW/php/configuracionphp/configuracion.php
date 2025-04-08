<?php
$conexion = mysqli_connect("localhost", "root", "", "registrophp");
 if  ($conexion) {
    echo 'conectado exitosamente';
}else {
    echo 'conexion incorrecta vuelva a repetir la prueba';
}
?>