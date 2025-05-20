<?php include("../php/config.php"); ?>
<?php
session_start(); // Debe ser lo primero en el archivo
include './configuracionphp/configuracion.php'; // Ajusta la ruta según tu estructura

// Verificar si el usuario está logueado
if(!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Obtener datos del usuario
$usuario_actual = $_SESSION['usuario'];
$query = "SELECT * FROM usuarios WHERE usuario = '$usuario_actual'";
$result = mysqli_query($conexion, $query);
$datos_usuario = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Perfil</title>

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
    <!-- CSS perfil -->
    <link rel="stylesheet" href="../css/perfil.css" />

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
            <li class="nav-item"><a class="nav__link" href="../biblioteca/biblioteca.html">Biblioteca</a></li>
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
                    ><a href="#" style="color: white"
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
                  <a href="./perfil.php" class="dropdown__link">
                    <i class="ri-user-2-line"></i> Perfil
                  </a>
                </li>
                <li>
                  <a href="./configuracionphp/logout.php" class="dropdown__link">
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
                   <h1>Perfil de <?php echo $datos_usuario['usuario']; ?></h1>
    
    <!-- Sección de información -->
                    <div class="perfil">
                    <div class="info-perfil">
                        <p>Nom d'usuari: <?php echo $datos_usuario['usuario']; ?></p>
                        <p>Correu electronic: <?php echo $datos_usuario['correo']; ?></p>
                    </div>

                    <!-- Formulario para cambiar nombre de usuario -->
                    <div class="cambuser">
                    <form action="./configuracionphp/cambiar_usuario.php" method="POST">
                        <h4>Cambiar el nom d'usuari</h4>
                        <input type="text" name="new_username" placeholder="Nuevo nombre de usuario" required>
                        <input type="password" name="password" placeholder="Contraseña actual" required>
                        <button type="submit">Actualitzar usuari</button>
                    </form>
                    </div>

                    <!-- Formulario para cambiar contraseña -->
                    <div class="cambpasw">
                    <form action="./configuracionphp/cambiar_contrasena.php" method="POST">
                        <h4>Cambiar contraseña</h4>
                        <input type="password" name="password" placeholder="Contraseña actual" required>
                        <input type="password" name="new_password" placeholder="Nueva contraseña" required>
                        <button type="submit">Actualizar contraseña</button>
                    </form>
                    </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /Billing Details -->

            <!-- Shiping Details -->
            
            <!-- /Shiping Details -->

            <!-- Order notes -->
           
            
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
