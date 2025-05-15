<?php
include_once("configuracion.php");
if (session_status() == PHP_SESSION_NONE) session_start();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "registrophp");

    // Verifica conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $stmt = $conexion->prepare("SELECT * FROM libros WHERE id = ?");
    $stmt->bind_param("i", $id); // Corregido aquí
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($libro = $resultado->fetch_assoc()) {
        // Libro encontrado
    } else {
        echo "Libro no encontrado.";
        exit;
    }
} else {
    echo "ID del libro no especificado.";
    exit;
}
?>

<!-- HTML -->

<div class="container" style="padding: 40px">
    <h1><?php echo htmlspecialchars($libro['titulo']); ?></h1>
    <img src="/ArcticW/img/Portadas/<?php echo htmlspecialchars($libro['archivo']); ?>" alt="Imagen del libro" style="max-width: 300px">
    <p><strong>Autor:</strong> <?php echo htmlspecialchars($libro['autor']); ?></p>
    <p><?php echo nl2br(htmlspecialchars($libro['descripcion'])); ?></p>
    <p><strong>Precio:</strong> <?php echo number_format($libro['precio'], 2); ?> €</p>
</div>