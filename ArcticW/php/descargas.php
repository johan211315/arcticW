<?php
// downloads.php: Muestra los libros digitales comprados y permite su descarga
session_start();
require("../php/configuracionphp/conexion.php"); // Ajusta la ruta según tu estructura
include("../php/config.php");
include("../php/carrito.php");

// Verificar que el usuario o transacción exista
if (!isset($_SESSION['usuario']) && !isset($_SESSION['transaction_id'])) {
    echo '<p>No has realizado ninguna compra o no has iniciado sesión.</p>';
    exit;
}

// Obtener ID de transacción (desde sesión o parámetro GET `tx`)
$transactionId = '';
if (isset($_SESSION['transaction_id'])) {
    $transactionId = $_SESSION['transaction_id'];
} elseif (isset($_GET['tx'])) {
    $transactionId = trim($_GET['tx']);
} else {
    echo '<p>Transacción no especificada.</p>';
    exit;
}

// 1) Obtener la venta
$sqlVenta = "SELECT ID, status FROM tblventas WHERE clavetransaccion = :tx";
$stmtVenta = $pdo->prepare($sqlVenta);
$stmtVenta->execute([':tx' => $transactionId]);
$venta = $stmtVenta->fetch(PDO::FETCH_ASSOC);

if (!$venta) {
    echo '<p>Transacción no encontrada.</p>';
    exit;
}

// 2) Verificar estado de la venta
if (!in_array($venta['status'], ['completo', 'aprobado'])) {
    echo '<p>Tu compra aún no ha sido procesada. Estado: ' . htmlspecialchars($venta['status']) . '</p>';
    exit;
}

// 3) Obtener detalles de productos comprados
$sqlDetalle = "
    SELECT d.idproducto, p.titulo, p.archivo
    FROM tbldetalleventa d
    JOIN tblproductos p ON d.idproducto = p.ID
    WHERE d.idventa = :idventa
";
$stmtDet = $pdo->prepare($sqlDetalle);
stmtDet->execute([':idventa' => $venta['ID']]);
$productos = $stmtDet->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Descargas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Tus libros digitales</h1>
    <p>A continuación encontrarás los enlaces para descargar los libros que has comprado:</p>
    <ul>
        <?php foreach ($productos as $prod): ?>
            <li>
                <strong><?php echo htmlspecialchars($prod['titulo']); ?></strong>
                - <a href="download_file.php?file=<?php echo urlencode($prod['archivo']); ?>">Descargar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>