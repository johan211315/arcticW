<?php
session_start();
include 'configuracion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_user = $_SESSION['username'];
    $new_username = $_POST['new_username'];
    $current_password = sha1($_POST['password']);

    // Verificar credenciales
    $check = "SELECT * FROM usuarios 
             WHERE username = '$current_user' 
             AND password = '$current_password'";
             
    $result = mysqli_query($conexion, $check);

    if(mysqli_num_rows($result) > 0) {
        // Verificar si nuevo username existe
        $check_new = "SELECT username FROM usuarios WHERE username = '$new_username'";
        $result_new = mysqli_query($conexion, $check_new);
        
        if(mysqli_num_rows($result_new) == 0) {
            $update = "UPDATE usuarios SET username = '$new_username' 
                      WHERE username = '$current_user'";
                      
            if(mysqli_query($conexion, $update)) {
                $_SESSION['username'] = $new_username;
                echo "<script>
                    alert('Username actualizado!');
                    window.location = '../perfil.php';
                </script>";
            }
        } else {
            echo "<script>
                alert('El nuevo username ya existe');
                history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Contraseña incorrecta');
            history.back();
        </script>";
    }
}
?>