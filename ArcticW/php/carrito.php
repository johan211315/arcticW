<?php
session_start();
$mensaje = "";
if (isset($_POST['btnaccion'])) {
    switch ($_POST['btnaccion']) {
        case 'agregar':
            // Validación de campos
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
            $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : '';

            if (!is_string($nombre) || empty($nombre)) {
                $mensaje .= "Nombre inválido<br/>";
            }

            if (!is_numeric($precio)) {
                $mensaje .= "Precio inválido<br/>";
            }

            if (!is_string($tipo) || empty($tipo)) {
                $mensaje .= "Tipo inválido<br/>";
            }

            if (!is_numeric($cantidad)) {
                $mensaje .= "Cantidad inválida<br/>";
            }

            // Si todas las validaciones son correctas
            if (empty($mensaje)) {
                if (!isset($_SESSION['carrito'])) {
                    $producto = array(
                        'nombre' => $nombre,
                        'precio' => $precio,
                        'tipo' => $tipo,
                        'cantidad' => $cantidad,
                    );
                    $_SESSION['carrito'][0] = $producto;
                } else {
                    $numeroproductos = count($_SESSION['carrito']);
                    $producto = array(
                        'nombre' => $nombre,
                        'precio' => $precio,
                        'tipo' => $tipo,
                        'cantidad' => $cantidad,
                    );
                    $_SESSION['carrito'][$numeroproductos] = $producto;
                }

                // Ya no se muestra el contenido de la sesión
                // $mensaje = print_r($_SESSION, true);
            }

            break;
    }
}
