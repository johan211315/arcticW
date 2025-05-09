<?php
// Iniciar sesión
session_start();

// Destruir todos los datos de la sesión
session_unset();
session_destroy();

// Redirigir al login
header("Location: ../../../index.php"); // Ajusta la ruta según tu estructura
exit();
?>