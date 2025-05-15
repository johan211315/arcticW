    <?php include_once("../php/config.php");
    include_once("../php/carrito.php"); ?>
    <!DOCTYPE html>
    <html lang="ca">

    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

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
            <a href="#" class="nav__logo">
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
                  <a href="../php/tienda.php"></a>Botiga
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
      <!-- BREADCRUMB -->
      <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <ul class="breadcrumb-tree">
                <li><a href="/index.php">Artic Wolves</a></li>
                <li><a href="/ArcticW/php/tienda.php">Llibres</a></li>
                <li><a href="#">Detalls</a></li>
                <li class="active">Llibre</li>
              </ul>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /BREADCRUMB -->