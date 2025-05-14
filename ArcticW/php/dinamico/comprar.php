<?php
// Incluir la conexión
include('config.php');

// Verificar si el ID se pasa a través de la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];  // Obtener el ID del libro desde la URL

    // Consulta para obtener los detalles del libro
    $sql = "SELECT * FROM libros WHERE id = $id";
    $result = $conn->query($sql);

    // Verificar si se encontró el libro
    if ($result->num_rows > 0) {
        $libro = $result->fetch_assoc();  // Obtener los detalles del libro

        // Mostrar los detalles del libro
        echo "<h2>Comprar: " . $libro['titulo'] . "</h2>";
        echo "<p>Autor: " . $libro['autor'] . "</p>";
        echo "<p>Precio: $" . $libro['precio'] . "</p>";
        echo "<img src='img/" . $libro['portada'] . "' alt='" . $libro['titulo'] . "' />";
        echo "<p><a href='procesar_pago.php?id=" . $libro['id'] . "'>Proceder al pago</a></p>";
    } else {
        echo "El libro no existe.";
    }
} else {
    echo "No se ha especificado el libro.";
}

// Cerrar conexión
$conn->close();
?>







<!-- <?php
// Incluir la conexión
// include('config.php'); -->

// Obtener el ID del libro desde la URL
// $id = $_GET['id'];

// Obtener los detalles del libro
// $sql = "SELECT * FROM libros WHERE id = $id";
// $result = $conn->query($sql);
// $libro = $result->fetch_assoc();

// if ($libro) {
//     echo "<h2>Comprar: " . $libro['titulo'] . "</h2>";
//     echo "<p>Autor: " . $libro['autor'] . "</p>";
//     echo "<p>Precio: $" . $libro['precio'] . "</p>";
//     echo "<img src='img/" . $libro['portada'] . "' alt='" . $libro['titulo'] . "' />";
//     echo "<p><a href='procesar_pago.php?id=" . $libro['id'] . "'>Proceder al pago</a></p>";
// } else {
//     echo "El libro no existe.";
// }

// Cerrar conexión
// $conn->close();
// ?
