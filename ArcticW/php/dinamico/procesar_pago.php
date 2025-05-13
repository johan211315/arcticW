<?php
// Incluir la conexión
include('config.php');

// Obtener el ID del libro desde la URL
$id = $_GET['id'];

// Obtener los detalles del libro
$sql = "SELECT * FROM libros WHERE id = $id";
$result = $conn->query($sql);
$libro = $result->fetch_assoc();

if ($libro) {
    echo "<h2>Compra Confirmada: " . $libro['titulo'] . "</h2>";
    echo "<p>Gracias por tu compra.</p>";
} else {
    echo "El libro no existe.";
}

// Cerrar conexión
$conn->close();
?>
