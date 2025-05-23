<?php include("../php/config.php");
include("../php/carrito.php");
?>
<?php
require '../php/configuracionphp/conexion.php'; ?>
<?php
include './configuracionphp/configuracion.php'; // Ajusta la ruta según tu estructura
$total = 1234.5678;
$totalFormateado = number_format($total, 2, '.', '');
echo $totalFormateado; // 1234.57
?>

?>
<!DOCTYPE html>
<html lang="ca">
<script src="https://www.paypal.com/sdk/js?client-id=AZFSxcrMxR-PtFRB5tkWX481YXzKLV0xFkehxXjcGMAEdhisb72_ATCPlRC-fBW5I2VRP3bw1Nfi7Wuf&currency=EUR"></script>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Pagament</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700"
        rel="stylesheet" />
    <!-- Navbar icon-->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" />
    <link rel="stylesheet" href="../css/banner.css" />
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="../css/slick.css" />
    <link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" />


    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/tiendadesta.css" />
    <link rel="stylesheet" href="../css/swiper.slide.css" />
    <link rel="stylesheet" href="../css/libros-orden.css" />
    <link rel="stylesheet" href="../css/asistente.css" />
    <link rel="stylesheet" href="../css/button.css" />
    <link rel="stylesheet" href="../css/carrusel-tienda.css" />
    <link rel="stylesheet" href="../css/tienda.css" />

    <!-- SWIPPER-->
    <!-- Swiper.js JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Swiper.js CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="../../index.php" class="nav__logo">
                    <img
                        src="../img/SELLO (CIRCULAR).png"
                        alt="Logo"
                        width="50px" />Artic Wolves
                </a>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>
            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="/index.php" class="nav__link">Home</a></li>
                    <li><a href="/ArcticW//kids/pruebakids/lesik/kids.html" class="nav__link">Nens</a></li>
                    <li><a href="/ArcticW/biblioteca/biblioteca.html" class="nav__link">Biblioteca</a></li>
                    <!--=============== DROPDOWN 1 TIENDA ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            <a href="#"></a>Botiga
                            <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <ul class="dropdown__menu">
                            <!--=============== DROPDOWN LLIBRES  ===============-->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <i class="ri-book-marked-line"></i><a href="../html/categorias.html" style="color: white">Categories</a><i class="ri-add-line dropdown__add"></i>
                                </div>
                                <ul class="dropdown__submenu"></ul>
                            </li>
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <a href="merch.php" style="color: white">Merchandising</a>
                                    <i class="ri-add-line dropdown__add"></i>
                                </div>
                                <ul class="dropdown__submenu">
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-shirt-line"></i> Samarretas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-shirt-line"></i> Tases
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-shirt-line"></i> Stickers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-shirt-line"></i> Posters
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown__link">
                                    <a href="../planes de pago/plans.html" style="color: white">Subscripció</a>
                                    <i class="ri-add-line dropdown__add"></i>
                            </div>
                            </li>
                        </ul>
                    </li>
                    <!--=============== DROPDOWN MENU CUENTA ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            <?php if (isset($_SESSION['usuario'])): ?>
                                <!-- Usuario logueado -->
                                <div class="usuario">
                                    <?php echo $_SESSION['usuario']; ?>
                                </div>
                            <?php else: ?>
                                <!-- Usuario no logueado -->
                                <div class="usuario">
                                    El teu usuari
                                </div>
                            <?php endif; ?>
                            <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <ul class="dropdown__menu">
                            <li>
                                <a href="../php/login.php" class="dropdown__link">
                                    <i class="ri-user-2-line"></i> Inici Sessió
                                </a>
                            </li>
                            <li>
                                <a href="../php/register.php" class="dropdown__link">
                                    <i class="ri-user-shared-fill"></i> Registrar-se
                                </a>
                            </li>
                            <li>
                                <a href="./perfil.php" class="dropdown__link">
                                    <i class="ri-user-2-line"></i> Perfil
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-group-2-fill"></i> Canviar de compte
                                </a>
                            </li>
                            <li>
                                <a href="./configuracionphp/logout.php" class="dropdown__link">
                                    <i class="ri-user-unfollow-line"></i> Tanca sessió
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--=============== APARTADO CARRITO ===============-->
                    <li>
                        <a href="checkout.php" class="nav__link"><i class="ri-shopping-cart-2-line"></i></a>
                    </li>
                    <!--=============== APARTADO BUSQUEDA ===============-->
                    <li class="nav__link">
                        <div class="search-container">
                            <input type="text" placeholder="Buscar" />
                            <div class="btn">
                                <i class="ri-search-line"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- /NAVIGATION -->
    <!-- NAVIGATION -->
    <!-- /NAVIGATION -->
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Botiga</a></li>
                        <li><a href="#">Llibres</a></li>
                        <li><a href="#">Novela</a></li>
                        <li class="active">100 años de soledad</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <?php


    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SESSION['carrito'])) {
        // 1) Recoger datos
        $SID    = session_id();
        $correo = isset($_POST['email']) ? trim($_POST['email']) : '';

        // 2) Calcular total
        $total = 0;
        foreach ($_SESSION['carrito'] as $producto) {
            $total += $producto['precio'] * $producto['cantidad'];
        }

        // 3) Insertar la venta
        $sql = "
        INSERT INTO `tblventas`
          (`ID`, `clavetransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `status`)
        VALUES
          (NULL, :clavetransaccion, '', NOW(), :correo, :total, 'pendiente')
    ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':clavetransaccion', $SID);
        $stmt->bindParam(':correo',           $correo);
        $stmt->bindParam(':total',            $total);
        $stmt->execute();

        // 4) Obtener ID de la venta recién insertada (si te hace falta)
        $idVenta = $pdo->lastInsertId();

        // 5) Mostrar resultado al usuario
        //echo "<h3>Total de la compra: €" . number_format($total, 2) . "</h3>";
    }
    ?>
    <link

        rel="stylesheet" />
    <style>
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            margin: 2rem 0;
        }

        .hero h1 {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .hero .amount {
            font-size: 2.5rem;
            font-weight: 600;
        }

        .hero .note {
            opacity: 0.85;
        }

        .hero .contact {
            color: #ffeb3b;
            text-decoration: underline;
        }
    </style>

    <div class="container">
        <div class="hero">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="display-5">¡Paso Final!</h1>
                <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg"
                    alt="PayPal" height="50">
            </div>
            <p class="lead note">
                Estás a punto de pagar con PayPal la cantidad de:
            </p>
            <p class="amount">
                <?php echo number_format($total, 2); ?> €
            </p>
            <hr class="border-light">
            <p class="note">
                Los productos podrán ser descargados una vez que se procese el pago.
                <br>
                <strong>Para aclaraciones:</strong>
                <a href="mailto:uperezoscar@gmail.com" class="contact">
                    uperezoscar@gmail.com
                </a>
            </p>
            <div class="text-end">
                <div id="paypal-button-container"></div>

                <script>
                    paypal.Buttons({
                        style: {
                            shape: 'pill',
                            label: 'pay'
                        },
                        createOrder: function(data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: <?= number_format($total, 2, '.', '') ?>
                                    }
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            actions.order.capture().then(function(detalles) {
                                window.location.href = "/ArcticW/biblioteca/biblioteca.html"
                            });
                        },
                        onCancel: function(data) {
                            alert("Pago cancelado");
                        }
                    }).render('#paypal-button-container');
                </script>

            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Contacte</h3>
                            <p></p>
                            <ul class="footer-links">
                                <li>
                                    <a href="#"><i class="fa fa-map-marker"></i>Carrer del Pallars, 4,
                                        Can Bassa, Granollers</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i>+34-610-6987-88</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o"></i>arcticwolves@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Apartats</h3>
                            <ul class="footer-links">
                                <li><a href="#">Botiga</a></li>
                                <li><a href="#">Llibres</a></li>
                                <li><a href="#">Merch</a></li>
                                <li><a href="#">Premium</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Informació</h3>
                            <ul class="footer-links">
                                <li><a href="../../index.php#atribhomeid">Sobre Nosaltres</a></li>
                                <li><a href="../html/client.html">Atenció al client</a></li>
                                <li>
                                    <a href="../html/privacidad.html">Polítiques de Privacitat (cookies)</a>
                                </li>
                                <li>
                                    <a href="../html/devoluciones.html">Polítiques de Canvis o devolucions</a>
                                </li>
                                <li>
                                    <a href="../html/terminos.html">Termes i Condicions</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Servei</h3>
                            <ul class="footer-links">
                                <li><a href="#">Compte</a></li>
                                <li><a href="#">Cistella</a></li>
                                <li><a href="#">Ajuda</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <button class="assistant-btn" onclick="toggleAssistant()">🐺</button>

        <div class="assistant-container" id="assistant">
            <div class="tope">
                <span>🐺 Tic the Arctic</span>
                <button class="close-btn" onclick="toggleAssistant()">✖</button>
            </div>
            <div class="chat-box" id="chatBox">
                <div class="message bot">
                    Hola! Sóc l'assistent de Arctic, pregunta'm el que necessitis, estic
                    per servir-te!.
                </div>
            </div>
            <div class="faq-buttons">
                <button onclick="sendFAQ('Com et dius?')">Com et dius?</button>
                <button onclick="sendFAQ('Què pots fer?')">Què pots fer?</button>
                <button onclick="sendFAQ('Quina hora és?')">Quina hora és?</button>
                <button onclick="sendFAQ('Com funciona el procés de devolucions?')">
                    Com funciona el procés de devolucions?
                </button>
                <button onclick="sendFAQ('Quins son els mètodes de pagament?')">
                    Quins son els mètodes de pagament?
                </button>
                <button
                    onclick="sendFAQ('En quin idioma están disponibles els llibres?')">
                    En quin idioma están disponibles els llibres?
                </button>
                <button onclick="sendFAQ('Digues els best-sellers del mes')">
                    Digues els best-sellers del mes
                </button>
            </div>
        </div>

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li>
                                <a href="#"><i class="fa fa-cc-visa"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-credit-card"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-paypal"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-discover"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-amex"></i></a>
                            </li>
                        </ul>
                        <span class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with
                            <i class="fa fa-heart-o" aria-hidden="true"></i> by
                            <a href="https://colorlib.com" target="_blank">GRUP 1- JOSEP,JOHAN,MARCEL,IZAN</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/nouislider.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/button.js"></script>
    <script src="../js/asistente.js"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=TU_CLIENT_ID&currency=EUR"
        data-sdk-integration-source="button-factory">
    </script>
</body>

</html>