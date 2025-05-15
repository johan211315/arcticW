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



<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="/ArcticW/img/Portadas/<?php echo htmlspecialchars($libro['archivo']); ?>" alt="Imagen del libro" style="max-width: 300px">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2 col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="/ArcticW/img/Portadas/<?php echo htmlspecialchars($libro['archivo']); ?>" alt="Imagen del libro" style="max-width: 300px">
                    </div>

                    <div class="product-preview">

                    </div>

                    <div class="product-preview">

                    </div>

                    <div class="product-preview">
                        <img src="/ArcticW/img/Portadas/<?php echo htmlspecialchars($libro['archivo']); ?>" alt="Imagen del libro" style="max-width: 300px">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <form action="" method="post">
                <div class="col-md-5">
                    <div class="product-details">
                        <h1><?php echo htmlspecialchars($libro['titulo']); ?></h1>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <strong>Autor:</strong> <?php echo htmlspecialchars($libro['autor']); ?>
                            </a>
                        </div>
                        <div>
                            <span>
                                <h3 class="product-price" name="precio" value="11.00">
                                    <?php echo number_format($libro['precio'], 2); ?> € <del class="product-old-price">Є11.00</del>
                                </h3>
                            </span>
                        </div>
                        <p><?php echo nl2br(htmlspecialchars($libro['descripcion'])); ?></p>
                        <div class="product-options">
                            <label>
                                Format
                                <select class="input-select">
                                    <option name="tipo" value="PDF">PDF</option>
                                    <option name="tipo" value="11.00">Ebook</option>
                                </select>
                            </label>
                        </div>

                        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number" name="cantidad" value="1" min="1" />
                                </div>
                            </div>
                            <form action="" method="post">
                                <input type="hidden" name="nombre" id="nombre" value="Cien años de Soledad">
                                <input type="hidden" name="precio" id="precio" value="7.00">
                                <input type="hidden" name="tipo" id="tipo" value="Ebook">
                                <input type="hidden" name="cantidad" id="cantidad" value="1">


                                <button class="order" name="btnaccion" value="agregar" type="submit">
                                    <span class="default">Realitzar Comanda</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span>
                                    <div class="box"></div>
                                    <div class="truck">
                                        <div class="back"></div>
                                        <div class="front">
                                            <div class="window"></div>
                                        </div>
                                        <div class="light top"></div>
                                        <div class="light bottom"></div>
                                    </div>
                                    <div class="lines"></div>
                                </button>
                        </div>
            </form>
            </form>
            <ul class="product-links">
                <li>Categoria:</li>
                <li><a href="#">Llibres</a></li>
                <li><a href="#">Novela</a></li>
            </ul>

            <ul class="product-links">
                <li>Compartir:</li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Product details -->