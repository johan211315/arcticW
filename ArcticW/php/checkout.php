<?php include("../php/config.php"); ?>
<?php
session_start(); // Debe ser lo primero en el archivo
include './configuracionphp/configuracion.php'; // Ajusta la ruta según tu estructura
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
      rel="stylesheet"
    />
    <!-- Navbar icon-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    />
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
    <link rel="stylesheet" href="../css/checkout.css" />
  </head>
  <body>
    <!-- HEADER -->
    <header class="header">
      <nav class="nav container">
        <div class="nav__data">
          <a href="#" class="nav__logo">
            <img
              src="../img/SELLO (CIRCULAR).png"
              alt="Logo"
              width="50px"
            />Arctic Wolves
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
            <!--=============== DROPDOWN 1 TIENDA ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
                <a href="tienda.php" style="color: white">Botiga</a
                ><i class="ri-arrow-down-s-line dropdown__arrow"></i>
              </div>
              <ul class="dropdown__menu">
                <!--=============== DROPDOWN LLIBRES  ===============-->
                <li class="dropdown__subitem">
                  <div class="dropdown__link">
                    <i class="ri-book-marked-line"></i
                    ><a href="../html/categorias.html" style="color: white"
                      >Categories</a
                    ><i class="ri-add-line dropdown__add"></i>
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
                  <a href="merch.php" style="color: white"
                      >Merchandising</a
                    >
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
                </li>
              </ul>
            </li>
            <!--=============== DROPDOWN MENU CUENTA ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
              <?php if(isset($_SESSION['usuario'])): ?>
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
                  <a href="./configuracionphp/logout.php" class="dropdown__link">
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
              <a href="#" class="nav__link"
                ><i class="ri-shopping-cart-2-line"></i
              ></a>
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

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-7">
            <!-- Billing Details -->
            <div class="container2">
              <form action="">
                <div class="row2">
                  <div class="column2">
                    <h3 class="title2">Direccion d'enviament</h3>
                    <div class="input-box2">
                      <span>Nom complet: </span>
                      <input type="text" placeholder="Nom exemple" />
                    </div>
                    <div class="input-box2">
                      <span>Email: </span>
                      <input type="email" placeholder="exemple@exemple.com" />
                    </div>
                    <div class="input-box2">
                      <span>Direcció: </span>
                      <input
                        type="text"
                        placeholder="S/N - Carrer - Localitat"
                      />
                    </div>
                    <div class="input-box2">
                      <span>Ciutat: </span>
                      <input type="text" placeholder="Barcelona" />
                    </div>
                    <div class="flex2">
                      <div class="input-box2">
                        <span>País: </span>
                        <input type="text" placeholder="Espanya" />
                      </div>
                      <div class="input-box2">
                        <span>Codic postal: </span>
                        <input type="number" placeholder="123 456" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column2">
                  <h3 class="title2">Pagament</h3>
                  <div class="input-box2">
                    <span>Tarjetes aceptades: </span>
                    <img src="../img/img/imgcards.png" alt="tipos de tarjeta" />
                  </div>
                  <div class="input-box2">
                    <span>Nom en la tarjeta: </span>
                    <input type="text" placeholder="Juan Manolo Fernandez" />
                  </div>
                  <div class="input-box2">
                    <span>Numero tarjeta: </span>
                    <input type="number" placeholder="1111 2222 3333 4444" />
                  </div>
                  <div class="input-box2">
                    <span>Mes caducitat: </span>
                    <input type="text" placeholder="Gener" />
                  </div>
                  <div class="input-box2">
                    <span>Any caducitat: </span>
                    <input type="text" placeholder="2025" />
                  </div>
                  <div class="input-box2">
                    <span>CVV: </span>
                    <input type="number" placeholder="123" />
                  </div>
                </div>
              </form>
            </div>
            <!-- /Billing Details -->

            <!-- Shiping Details -->
            <div class="shiping-details">
              <div class="section-title">
                <h3 class="title">Shiping address</h3>
              </div>
              <div class="input-checkbox">
                <input type="checkbox" id="shiping-address" />
                <label for="shiping-address">
                  <span></span>
                  Ship to a diffrent address?
                </label>
                <div class="caption">
                  <div class="form-group">
                    <input
                      class="input"
                      type="text"
                      name="first-name"
                      placeholder="First Name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="input"
                      type="text"
                      name="last-name"
                      placeholder="Last Name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="input"
                      type="email"
                      name="email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="input"
                      type="text"
                      name="address"
                      placeholder="Address"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="input"
                      type="text"
                      name="city"
                      placeholder="City"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="input"
                      type="text"
                      name="country"
                      placeholder="Country"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="input"
                      type="text"
                      name="zip-code"
                      placeholder="ZIP Code"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="input"
                      type="tel"
                      name="tel"
                      placeholder="Telephone"
                    />
                  </div>
                </div>
              </div>
            </div>
            <!-- /Shiping Details -->

            <!-- Order notes -->
            <div class="order-notes">
              <textarea class="input" placeholder="Order Notes"></textarea>
            </div>
            <!-- /Order notes -->
          </div>

          <!-- Order Details -->
          <div class="col-md-5 order-details">
            <div class="section-title text-center">
              <h3 class="title">Your Order</h3>
            </div>
            <div class="order-summary">
              <div class="order-col">
                <div><strong>PRODUCT</strong></div>
                <div><strong>TOTAL</strong></div>
              </div>
              <div class="order-products">
                <div class="order-col">
                  <div>1x Product Name Goes Here</div>
                  <div>€980.00</div>
                </div>
                <div class="order-col">
                  <div>2x Product Name Goes Here</div>
                  <div>€980.00</div>
                </div>
              </div>
              <div class="order-col">
                <div>Shiping</div>
                <div><strong>FREE</strong></div>
              </div>
              <div class="order-col">
                <div><strong>TOTAL</strong></div>
                <div><strong class="order-total">€2940.00</strong></div>
              </div>
            </div>
            <div class="payment-method">
              <div class="input-radio">
                <input type="radio" name="payment" id="payment-1" />
                <label for="payment-1">
                  <span></span>
                  Direct Bank Transfer
                </label>
                <div class="caption">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                </div>
              </div>
              <div class="input-radio">
                <input type="radio" name="payment" id="payment-2" />
                <label for="payment-2">
                  <span></span>
                  Cheque Payment
                </label>
                <div class="caption">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                </div>
              </div>
              <div class="input-radio">
                <input type="radio" name="payment" id="payment-3" />
                <label for="payment-3">
                  <span></span>
                  Paypal System
                </label>
                <div class="caption">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                </div>
              </div>
            </div>
            <div class="input-checkbox">
              <input type="checkbox" id="terms" />
              <label for="terms">
                <span></span>
                I've read and accept the <a href="#">terms and conditions</a>
              </label>
            </div>
            <a href="#" class="primary-btn order-submit">Place order</a>
          </div>
          <!-- /Order Details -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->
    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="newsletter">
              <p>Uneix-te al nostre canal de <strong>DISCORD</strong></p>
              <div class="discord">
                <a href="https://discord.gg/ydbRaVq5"
                  ><img
                    src="../img/discord.png"
                    alt="Discord"
                    width="750px"
                    class="discord_img"
                /></a>
              </div>
              <ul class="newsletter-follow">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ri-twitter-x-line"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ri-tiktok-line"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
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
                    <a href="#"
                      ><i class="fa fa-map-marker"></i>Carrer del Pallars, 4,
                      Can Bassa, Granollers</a
                    >
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-phone"></i>+34-610-6987-88</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-envelope-o"></i>arcticwolves@gmail.com</a
                    >
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
                    <a href="../html/privacidad.html"
                      >Polítiques de Privacitat (cookies)</a
                    >
                  </li>
                  <li>
                    <a href="../html/devoluciones.html"
                      >Polítiques de Canvis o devolucions</a
                    >
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
                <a href="https://colorlib.com" target="_blank"
                  >GRUP 1- JOSEP,JOHAN,MARCEL,IZAN</a
                >
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
  </body>
</html>
