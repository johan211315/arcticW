<?php
session_start();
include './configuracion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_user = $_SESSION['username'];
    $current_password = sha1($_POST['password']);
    $new_password = sha1($_POST['new_password']);

    $check = "SELECT * FROM usuarios 
             WHERE username = '$current_user' 
             AND password = '$current_password'";
             
    $result = mysqli_query($conexion, $check);

    if(mysqli_num_rows($result) > 0) {
        $update = "UPDATE usuarios SET password = '$new_password' 
                  WHERE username = '$current_user'";
                  
        if(mysqli_query($conexion, $update)) {
            echo "<script>
                alert('Contraseña actualizada!');
                window.location = '../perfil.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Contraseña actual incorrecta');
            history.back();
        </script>";
    }
}
?>