<?php
session_start();
include 'configuracion.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar que los campos no estén vacíos
    if (empty($username) || empty($password)) {
        echo '<script>
                alert("Por favor, completa todos los campos.");
                window.location = "../login.php";
              </script>';
        exit;
    }

    // Preparar la consulta para evitar inyecciones SQL
    $query = "SELECT * FROM usuarios WHERE usuario = ?";
    if ($stmt = mysqli_prepare($conexion, $query)) {
        // Enlazar los parámetros
        mysqli_stmt_bind_param($stmt, "s", $username);
        // Ejecutar la consulta
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Verificar si se encontró el usuario
        if (mysqli_num_rows($result) > 0) {
            $datos_usuario = mysqli_fetch_assoc($result);

            // Verificar la contraseña usando password_verify() para seguridad
            if (password_verify($password, $datos_usuario['contrasena'])) {
                // Si la contraseña es correcta, iniciar sesión
                $_SESSION['usuario'] = $datos_usuario['usuario'];
                header("location: ../../../index.php"); // Redirigir al index
                exit;
            } else {
                // Si la contraseña es incorrecta
                echo '<script>
                        alert("Contraseña incorrecta, intenta nuevamente.");
                        window.location = "../login.php";
                      </script>';
                exit;
            }
        } else {
            // Si el usuario no existe
            echo '<script>
                    alert("Usuario no encontrado.");
                    window.location = "../login.php";
                  </script>';
            exit;
        }

        // Cerrar la consulta
        mysqli_stmt_close($stmt);
    } else {
        // Si no se puede preparar la consulta
        echo '<script>
                alert("Error en la base de datos, intenta nuevamente.");
                window.location = "../login.php";
              </script>';
        exit;
    }
}

mysqli_close($conexion);
?>
