<?php
include("../php/config.php");
include("../php/carrito.php");
include './configuracionphp/configuracion.php'; // Ajusta la ruta según tu estructura
// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = [];
}

// Añadir producto al carrito
if (
  isset($_GET['add']) &&
  isset($_GET['nombre'], $_GET['precio'], $_GET['tipo'], $_GET['cantidad'], $_GET['id'])
) {
  $nombre   = $_GET['nombre'];
  $precio   = floatval($_GET['precio']);
  $tipo     = $_GET['tipo'];
  $cantidad = intval($_GET['cantidad']);

  if (isset($_SESSION['carrito'][$id])) {
    $_SESSION['carrito'][$id]['cantidad'] += $cantidad;
  } else {
    $_SESSION['carrito'][$id] = [
      'nombre'   => $nombre,
      'precio'   => $precio,
      'tipo'     => $tipo,
      'cantidad' => $cantidad
    ];
  }
  header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
  exit;
}

// Eliminar producto del carrito
if (isset($_GET['remove'])) {
  $removeId = $_GET['remove'];
  if (isset($_SESSION['carrito'][$removeId])) {
    unset($_SESSION['carrito'][$removeId]);
  }
  header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
  exit;
}
?>

<!DOCTYPE html>

<html lang="ca">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Electro - HTML Ecommerce Template</title>

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
  <!-- Navbar style -->
  <link rel="stylesheet" href="../css/navbar.css" />
  <!-- CSS-libros -->
  <link rel="stylesheet" href="../css/libros-orden.css" />
  <!-- CSS-Boton -->
  <link rel="stylesheet" href="../css/button.css" />
  <!-- CSS-checkout -->
  <link rel="stylesheet" href="../css/checkout1.css" />
</head>
<style></style>

<body>
  <!-- HEADER -->
  <header class="header">
    <nav class="nav container">
      <div class="nav__data">
        <a href="#" class="nav__logo">
          <img
            src="../img/SELLO (CIRCULAR).png"
            alt="Logo"
            width="50px" />Arctic Wolves
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
          <li><a href="/ArcticW/kids/pruebakids/lesik/kids.html" class="nav__link">Nens</a></li>
          <li><a href="/ArcticW/biblioteca/biblioteca.html" class="nav__link">Biblioteca</a></li>
          <!--=============== DROPDOWN 1 TIENDA ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
              <a href="tienda.php" style="color: white">Botiga</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>
            <ul class="dropdown__menu">
              <!--=============== DROPDOWN LLIBRES  ===============-->
              <li class="dropdown__subitem">
                <div class="dropdown__link">
                  <i class="ri-book-marked-line"></i><a href="../html/categorias.html" style="color: white">Categories</a><i class="ri-add-line dropdown__add"></i>
                </div>
                <!--<ul class="dropdown__submenu">
						  <li>
							<a href="#" class="dropdown__sublink">
							  <i class="ri-ghost-2-line"></i> Terror
							</a>
						  </li>
						  <li>
							<a href="#" class="dropdown__sublink">
								<i class="ri-hearts-line"></i> Romanç
							</a>
						  </li>
						  <li>
							<a href="#" class="dropdown__sublink">
								<i class="ri-emotion-laugh-line"></i>Comèdia
							</a>
						  </li>
						  <li>
							<a href="#" class="dropdown__sublink">
								<i class="ri-book-read-line"></i> Història
							</a>
						  </li>
						  <li>
							<a href="#" class="dropdown__sublink">
								<i class="ri-zhihu-line"></i> Manga
							</a>
						  </li>
						  <li>
							<a href="#" class="dropdown__sublink">
								<i class="ri-fire-line"></i>Ciencia ficció
							</a>
						  </li>
						  <li>
							<a href="#" class="dropdown__sublink">
								<i class="ri-brain-line"></i> Filosofia
							</a>
						  </li>
						  <li>
							<a href="#" class="dropdown__sublink">
								<i class="ri-quill-pen-ai-line"></i> Espiritualitat
							</a>
						  </li>
						</ul>-->
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
                <a href="login.php" class="dropdown__link">
                  <i class="ri-user-2-line"></i> Inici Sessió
                </a>
              </li>
              <li>
                <a href="register.php" class="dropdown__link">
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
                <a href="#" class="dropdown__link">
                  <i class="ri-user-unfollow-line"></i> Tanca sessió
                </a>
              </li>
            </ul>
          </li>
          <!--=============== APARTADO CARRITO ===============-->
          <li>
            <a href="#" class="nav__link"><i class="ri-shopping-cart-2-line"></i></a>
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

  <!-- BREADCRUMB -->

  <div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb-tree">
            <li><a href="/index.php">Artic Wolves</a></li>
            <li><a href="../php/tienda.php">Botiga</a></li>
            <li><a href="#">Llibres</a></li>
            <li class="active">Cistella</li>
          </ul>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /BREADCRUMB -->
  <div class="container my-5">
    <h2>Your Order</h2>

    <?php if (empty($_SESSION['carrito'])): ?>
      <div class="alert alert-warning">No hi ha productes al carretó</div>
    <?php else: ?>
      <table class="table table-bordered" style="width: 100%;">
        <thead>
          <tr>
            <th>PRODUCTE</th>
            <th>TIPUS</th>
            <th>PREU U.</th>
            <th>QUANTITAT</th>
            <th>SUBTOTAL</th>
            <th>ACCIO</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $total = 0;
          foreach ($_SESSION['carrito'] as $id => $prod):
            $subtotal = $prod['precio'] * $prod['cantidad'];
            $total += $subtotal;
          ?>
            <tr>
              <td><?= htmlspecialchars($prod['nombre']) ?></td>
              <td><?= htmlspecialchars($prod['tipo']) ?></td>
              <td>€<?= number_format($prod['precio'], 2) ?></td>
              <td><?= $prod['cantidad'] ?></td>
              <td><strong style="color:red; font-size:16px;">€<?= number_format($subtotal, 2) ?></strong></td>
              <td>
                <a href="?remove=<?= urlencode($id) ?>" class="btn btn-sm btn-danger">
                  Eliminar
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4" class="text-right">TOTAL:</th>
            <th colspan="2"><strong style="color:red; font-size:18px;">€<?= number_format($total, 2) ?></strong></th>
          </tr>
        </tfoot>
      </table>
    <?php endif; ?>

  </div>
  <!-- SECTION -->

  <!-- SECTION -->

  <!-- Order notes -->

  <!-- /Order notes -->
  </div>
  <!-- /col-md-7 -->

  <!-- Right column: Order Summary & Payment -->
  <div class="col-md-5">


    <div class="input-radio" style="margin-left: 45%; width:100%">
      <input type="radio" name="payment" id="payment-3" value="paypal" />
      <label for="payment-3"><span></span>Paypal System</label>
      <div class="caption">
      </div>
    </div>
  </div>
  <!-- /Payment Methods -->

  <!-- Terms & Place Order -->
  <div class="input-checkbox">
    <input type="checkbox" id="terms" name="terms" />
    <!-- /col-md-5 -->
  </div>
  <!-- /row -->
  </div>
  <!-- /container -->


  </div>
  <!-- /SECTION -->

  <!-- /SECTION -->

  <!-- NEWSLETTER -->

  <div id="newsletter" class="section">
    <!-- container -->
    <div class="container">

      <table>
        <tr>
          <td colspan="5"></td>
          <form action="pagar.php" method="post">
            <div class="alert alert-success" style="width: 100%; margin-left: 4em;">
              <div class="form-group">
                <label for="my-input">Correo de contacto:</label>
                <input id="email" name="email" class="form-control" type=email" placeholder="Por favor escribe tu correo" required>
              </div>
              <small id="emailhelp" class="form-text text-muted">Los producos se enviarán a este correo</small>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder" name="btnAccion" style="background-color:red; border:none" href="pagar.php">
              Proceder a pagar >>
            </button>
          </form>

        </tr>
      </table>
      <!-- row -->

      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /NEWSLETTER -->

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
                <li><a href="../html/nosotros.html">Sobre Nosaltres</a></li>
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


    ```

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

</body>

</html>