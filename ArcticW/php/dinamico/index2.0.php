<?php
// Incluir la conexión
include('config.php');

// Consulta para obtener todos los libros
$sql = "SELECT * FROM libros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los libros
    while($row = $result->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<h3>" . $row['titulo'] . "</h3>";
        echo "<p>Autor: " . $row['autor'] . "</p>";
        echo "<p>Precio: $" . $row['precio'] . "</p>";
        echo "<img src='img/" . $row['portada'] . "' alt='" . $row['titulo'] . "' />";
        echo "<p><a href='comprar.php?id=" . $row['id'] . "'>Comprar</a></p>";
        echo "</div>";
    }
} else {
    echo "No hay libros disponibles.";
}

// Cerrar conexión
$conn->close();
?>
