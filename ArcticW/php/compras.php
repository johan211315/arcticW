<?php
          $sentencia =$pdo ->prepare("SELECT * FROM `libros_digitales`"); 
          $sentencia->execute();
          $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          print_r($listaProductos)
        ?>



//SE COLOCA EN DATABASE.PHP//
<?php // Archivo: database.php (o el nombre que elijas)

// --- Detalles de la Conexión ---
$db_host = 'localhost';
$db_name = 'login';
$db_user = 'root';
$db_pass = '';
$db_charset = 'utf8mb4';

// --- Opciones de PDO ---
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// --- Construir DSN ---
$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";

// --- Variable $pdo (se inicializa como null o false por si falla) ---
$pdo = null; // O $pdo = false;

// --- Intentar la Conexión ---
try {
    // Crear la instancia de PDO
    $pdo = new PDO($dsn, $db_user, $db_pass, $options);

} catch (PDOException $e) {
    // --- Manejo de Errores de Conexión ---
    error_log("Error de conexión a BD: " . $e->getMessage()); // ¡Importante registrar el error!
    // Mostrar un mensaje genérico y detener si la conexión es esencial
    die("Lo sentimos, estamos experimentando problemas técnicos. Por favor, inténtalo más tarde.");
    // El 'die()' detiene la ejecución de CUALQUIER script que incluya este archivo si la conexión falla.
}

// Si el script llega aquí, la conexión fue exitosa (o falló y ya se detuvo con die()).
// La variable $pdo está lista para ser usada en los archivos que incluyan este.

?>



// SE COLOCA EN LAS PÁGINAS //


<?php // Archivo: productos.php (o index.php, etc.)

// 1. Incluir el archivo de conexión PRIMERO
//    Asegúrate de que la ruta sea correcta desde ESTE archivo
require_once '../php/configuracionphp/database.php'; // Incluye y ejecuta database.php

// 2. ¡Ahora la variable $pdo está disponible y lista para usar!
//    (Si la conexión falló en database.php, el script se habría detenido allí)

// 3. Usa $pdo para tus consultas
try {
    $sentencia = $pdo->prepare("SELECT * FROM `libros_digitales` WHERE stock > 0"); // Ejemplo
    $sentencia->execute();
    $listaProductos = $sentencia->fetchAll(); // El modo FETCH_ASSOC ya está por defecto

    // 4. Muestra los productos (recorriendo $listaProductos con un foreach y HTML)
    if ($listaProductos) {
        foreach ($listaProductos as $producto) {
            echo "<div>";
            echo "<h2>" . htmlspecialchars($producto['titulo']) . "</h2>";
            echo "<p>Precio: $" . htmlspecialchars(number_format($producto['precio'], 2)) . "</p>";
            // ... más detalles del producto ...
            echo "</div><hr>";
        }
    } else {
        echo "<p>No hay productos disponibles.</p>";
    }

} catch (PDOException $e) {
    // Manejar errores específicos de ESTA consulta
    error_log("Error al obtener productos: " . $e->getMessage());
    echo "<p>Error al cargar la lista de productos.</p>";
}

?>