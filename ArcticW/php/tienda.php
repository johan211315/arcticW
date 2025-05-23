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

  <title>Tienda</title>

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
              <a href="../php/tienda.php"></a>Botiga
              <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>
            <ul class="dropdown__menu">
              <!--=============== DROPDOWN LLIBRES  ===============-->
              <li class="dropdown__subitem">
                <div class="dropdown__link">
                  <i class="ri-book-marked-line"></i><a href="#" style="color: white">Categories</a><i class="ri-add-line dropdown__add"></i>
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
              <input id="searchInput" type="text" placeholder="Buscar" />
              <div id="searchButton" class="btn">
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

  <!--Slider de imagenes-->
  <!--Slider de imagenes-->
  <div class="marina">
    <div class="slider">
      <div class="slides">
        <!--radio button start-->
        <input type="radio" name="radio-btn" id="radio1" />
        <input type="radio" name="radio-btn" id="radio2" />
        <input type="radio" name="radio-btn" id="radio3" />
        <!--radio button end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="../img/banner/banner1.jpg" alt="banner1" />
        </div>
        <div class="slide">
          <img src="../img/banner/banner2.jpg" alt="banner2" />
        </div>
        <div class="slide">
          <img src="../img/banner/banner3.jpg" alt="banner3" />
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
      <!--slide images end-->
    </div>
  </div>
  <main>
    <div class="fondomov">
      <article class="autores2">
        <section class="section7">
          <div class="container-carousel">
            <div class="carruseles slider2">
              <div class="slider-section">
                <img src="../img/Portadas/1.jpg">

              </div>
              <div class="slider-section">
                <img src="../img/Portadas/2.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/3.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/4.jpg">
              </div>
            </div>
            <div class="btn-left"><i class="bx bx-chevron-left"></i></div>
            <div class="btn-right"><i class="bx bx-chevron-right"></i></div>
          </div>
          <p>Més venuts gener</p>
        </section>
        <section class="section7">
          <div class="container-carousel">
            <div class="carruseles slider2">
              <div class="slider-section">
                <img src="../img/Portadas/5.jpeg">

              </div>
              <div class="slider-section">
                <img src="../img/Portadas/6.png">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/7.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/8.jpg">
              </div>
            </div>
            <div class="btn-left"><i class="bx bx-chevron-left"></i></div>
            <div class="btn-right"><i class="bx bx-chevron-right"></i></div>
          </div>
          <p>Més venuts febrer</p>
        </section>
        <section class="section7">
          <div class="container-carousel">
            <div class="carruseles slider2">
              <div class="slider-section">
                <img src="../img/Portadas/9.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/10.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/1.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/2.jpg">
              </div>
            </div>
            <div class="btn-left"><i class="bx bx-chevron-left"></i></div>
            <div class="btn-right"><i class="bx bx-chevron-right"></i></div>
          </div>
          <p>Més venuts març</p>
          <script src="../js/carrusel-tienda.js"></script>
        </section>
        <section class="section7">
          <div class="container-carousel">
            <div class="carruseles slider2">
              <div class="slider-section">
                <img src="../img/Portadas/1003w-D45iCPGnKec.webp">

              </div>
              <div class="slider-section">
                <img src="../img/Portadas/1623078210-la-naranja-mecanica-anthony-burgess-201505261226.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/370_señora_paris.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/1003w-_pp1hAU8znQ.webp">
              </div>
            </div>
            <div class="btn-left"><i class="bx bx-chevron-left"></i></div>
            <div class="btn-right"><i class="bx bx-chevron-right"></i></div>
          </div>
          <p>Més venuts abril</p>
        </section>
        <section class="section7">
          <div class="container-carousel">
            <div class="carruseles slider2">
              <div class="slider-section">
                <img src="../img/Portadas/portadas-libros-big-2019101610.jpg">

              </div>
              <div class="slider-section">
                <img src="../img/Portadas/81iU2inbgLL._UF1000,1000_QL80_.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/5b5588929b6f46d55f62e775c3e8d101.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/1003w-wxuYB_sJtMw.webp">
              </div>
            </div>
            <div class="btn-left"><i class="bx bx-chevron-left"></i></div>
            <div class="btn-right"><i class="bx bx-chevron-right"></i></div>
          </div>
          <p>Més venuts maig</p>
        </section>
        <section class="section7">
          <div class="container-carousel">
            <div class="carruseles slider2">
              <div class="slider-section">
                <img src="../img/Portadas/1623078210-la-naranja-mecanica-anthony-burgess-201505261226.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/5b5588929b6f46d55f62e775c3e8d101.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/370_señora_paris.jpg">
              </div>
              <div class="slider-section">
                <img src="../img/Portadas/81iU2inbgLL._UF1000,1000_QL80_.jpg">
              </div>
            </div>
            <div class="btn-left"><i class="bx bx-chevron-left"></i></div>
            <div class="btn-right"><i class="bx bx-chevron-right"></i></div>
          </div>
          <p>Més venuts juny</p>
          <script src="../js/carrusel-tienda.js"></script>
        </section>
      </article>
    </div>
  </main>

  <!-- VITRINA DE LIBROS -->
  <div class="separ"></div>
  <div class="destacpunt">
    <div class="destacpunt2">
      <div class="tln">
        <h3>LLIBRES D'HISTÒRIA I CULTURA</h3>
      </div>
      <div class="puntoboton">
        <button>
          <p>Ver todo</p>
        </button>
        <a class="trespuntitos" href="#"> ︙ </a>
      </div>
    </div>
  </div>




  <!-- Contenedor del carrusel -->
  <div class="swiper-container" style="overflow: hidden">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="overflow: hidden; height: 530px">


        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <a href="../php/product.php">
              <div class="book books-1"></div>
            </a>
          </div>
        </div>
        <hr />

        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          100 años de soledad
        </p>
        <!-- <p
            style="
              font-weight: 100;
              font-size: 15px;
              text-align: left;
              height: 10px;
            "
          >
          </p> -->
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>Є20</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>


        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span></a><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>


      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-2"></div>
          </div>
        </div>
        <hr />

        <a href="http://localhost/ArcticW/php/dinamico.php?id=2">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            El libro de los 5 anillos
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-3"></div>
          </div>
        </div>
        <hr />
        <a href="http://localhost/ArcticW/php/dinamico.php?id=3">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Platon la república
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-4"></div>
          </div>
        </div>
        <hr />
        <a href="http://localhost/ArcticW/php/dinamico.php?id=4">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            El arte de la Guerra
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-5"></div>
          </div>
        </div>
        <hr />
        <a href="http://localhost/ArcticW/php/dinamico.php?id=5">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            La vuelta al mundo en 80 dias
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>

        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-6"></div>
          </div>
        </div>
        <hr />
        <a href="http://localhost/ArcticW/php/dinamico.php?id=7">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Mein Kampf
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-7"></div>
          </div>
        </div>
        <hr />
        <a href="http://localhost/ArcticW/php/dinamico.php?id=8">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Dr. Jekyll Mr.Hyde
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-8"></div>
          </div>
        </div>
        <hr />
        <a href="http://localhost/ArcticW/php/dinamico.php?id=9">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            El retrato de una dama
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-9"></div>
          </div>
        </div>
        <hr />
        <a href="http://localhost/ArcticW/php/dinamico.php?id=10">
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Dracula
          </p>
        </a>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      < class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-10"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Nombre del libro
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          Nombre autor
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
              margin-left: 15px;
              width: 50px;
              background-color: red;
              border: 0px;
              border-radius: 15px;
            ">
            -5%
          </button>
        </p>
        <p
          style="
            font-weight: bolder;
            font-size: 25px;
            text-align: left;
            color: red;
          ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
    </div>
    <!-- Flechas de navegación -->
    <div class="swiper-button-next" style="color: rgb(0, 0, 0)"></div>
    <div class="swiper-button-prev" style="color: rgb(0, 0, 0)"></div>
  </div>
  <div class="separ"></div>
  <div class="destacpunt">
    <div class="destacpunt2">
      <div class="tln">
        <h3>LLIBRES DE FANTÀSIA</h3>
      </div>
      <div class="puntoboton">
        <button>
          <p>Ver todo</p>
        </button>
        <a class="trespuntitos" href="#"> ︙ </a>
      </div>
    </div>
  </div>

  <!-- inicio de la otra fila de libros  -->

  <div class="swiper-container" style="overflow: hidden">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-11"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Señora Paris
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-12"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          El bosque Magico
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del>
          <button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-13"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Las Vidas Dentro de tu Cabeza
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-14"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Cruce de Caminos
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-15"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          La Naranja Mecanica
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>

        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-16"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Hasta que el verano se acabe
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-17"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Cada Historia Cuenta
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-18"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Diseño de Portada
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-19"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          La Vuelta al Mundo en 80 dias
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      < class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-10"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
              margin-left: 15px;
              width: 50px;
              background-color: red;
              border: 0px;
              border-radius: 15px;
            ">
            -5%
          </button>
        </p>
        <p
          style="
            font-weight: bolder;
            font-size: 25px;
            text-align: left;
            color: red;
          ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
    </div>
    <!-- Flechas de navegación -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- SEPARADOR DE DOBLE TIENDA-->
  <div class="separ"></div>
  <div class="destacpunt">
    <div class="destacpunt2">
      <div class="tln">
        <h3>LLIBRES DE L'ACTUALITAT</h3>
      </div>
      <div class="puntoboton">
        <button>
          <p>Ver todo</p>
        </button>
        <a class="trespuntitos" href="#"> ︙ </a>
      </div>
    </div>
  </div>
  <!-- Contenedor del carrusel -->
  <div class="swiper-container" style="overflow: hidden">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-13"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Las Vidas Dentro de tu Cabeza
        </p>
        <!-- <p
            style="
              font-weight: 100;
              font-size: 15px;
              text-align: left;
              height: 10px;
            "
          > -->

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-5"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          La Vuelta al Mundo en 80 dias
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-9"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Dracula
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-14"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Cruce de Caminos
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-18 "></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Diseño de Portada
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>

        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-6"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Mein Kampf
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-7"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Dr. Jekyll Mr. Hyde
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-8"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          El retrato de una Dama
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      <div class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-15"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          La Naranja Mecanica
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">

        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              ">
            -5%
          </button>
        </p>
        <p
          style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
      </div>
      < class="swiper-slide" style="overflow: hidden; height: 530px">
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-10"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Nombre del libro
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          Nombre autor
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del><button
            class="product-old-price"
            style="
              margin-left: 15px;
              width: 50px;
              background-color: red;
              border: 0px;
              border-radius: 15px;
            ">
            -5%
          </button>
        </p>
        <p
          style="
            font-weight: bolder;
            font-size: 25px;
            text-align: left;
            color: red;
          ">
          21,75Є
        </p>
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
        <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px">
            <span class="default">Detalls</span><span class="success">Comanda Enviada<svg viewbox="0 0 12 10">
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
    </div>
    <!-- Flechas de navegación -->
    <div class="swiper-button-next" style="color: rgb(0, 0, 0)"></div>
    <div class="swiper-button-prev" style="color: rgb(0, 0, 0)"></div>
  </div>
  <!-- SEPARADOR TRIPLE TIENDA
<div class="separ"></div>
    <div class="destacpunt">
      <div class="destacpunt2">
        <div class="tln">
          <h3>LIBROS DE ACTUALIDAD</h3>
        </div>
        <div class="puntoboton">
          <button>
            <p>Ver todo</p>
          </button>
          <a class="trespuntitos" href="#"> ︙ </a>
        </div>
      </div>
    </div>
    <!-- Contenedor del carrusel -->
  <!-- <div class="swiper-container" style="overflow: hidden">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-1"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p
            style="
              font-weight: 100;
              font-size: 15px;
              text-align: left;
              height: 10px;
            "
          >
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-2"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-3"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-4"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
            </button> -->
  <!-- </div>
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-5"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p> -->

  <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-6"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5% -->
  <!-- </button>

          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-7"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            > -->
  <!-- -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-8"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
            <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        <div class="swiper-slide" style="overflow: hidden; height: 530px">
          <div class="container2">
            <div class="box-out" style="width: 100%; justify-content: center">
              <div class="book books-9"></div>
            </div>
          </div>
          <hr />
          <p style="font-weight: bolder; font-size: 20px; text-align: left">
            Nombre del libro
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            Nombre autor
          </p>
          <p style="font-weight: 100; font-size: 15px; text-align: left">
            <del>$7.00</del
            ><button
              class="product-old-price"
              style="
                margin-left: 15px;
                width: 50px;
                background-color: red;
                border: 0px;
                border-radius: 15px;
              "
            >
              -5%
            </button>
          </p>
          <p
            style="
              font-weight: bolder;
              font-size: 25px;
              text-align: left;
              color: red;
            "
          >
            21,75Є
          </p>
          <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px"> -->
  <!-- <button
              class="order"
              style="width: 80%; position: relative; top: -10px"
            >
              <span class="default">Realitzar Comanda</span
              ><span class="success"
                >Comanda Enviada<svg viewbox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
              ></span>
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
        </div>
        < class="swiper-slide" style="overflow: hidden; height: 530px" >
        <div class="container2">
          <div class="box-out" style="width: 100%; justify-content: center">
            <div class="book books-10"></div>
          </div>
        </div>
        <hr />
        <p style="font-weight: bolder; font-size: 20px; text-align: left">
          Nombre del libro
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          Nombre autor
        </p>
        <p style="font-weight: 100; font-size: 15px; text-align: left">
          <del>$7.00</del
          ><button
            class="product-old-price"
            style="
              margin-left: 15px;
              width: 50px;
              background-color: red;
              border: 0px;
              border-radius: 15px;
            "
          >
            -5%
          </button>
        </p>
        <p
          style="
            font-weight: bolder;
            font-size: 25px;
            text-align: left;
            color: red;
          "
        >
          21,75Є
        </p> 
        <!-- CARRITO DE COMPRAS CSS / JavaScript	 -->
  <!-- <div class="add-to-cart" style="margin-bottom: 50px">
          <button
            class="order"
            style="width: 80%; position: relative; top: -10px"
          >
            <span class="default">Realitzar Comanda</span
            ><span class="success"
              >Comanda Enviada<svg viewbox="0 0 12 10">
                <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg
            ></span>
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
      </div> -->
  <!-- Flechas de navegación -->
  <div class="swiper-button-next" style="color: rgb(0, 0, 0)"></div>
  <div class="swiper-button-prev" style="color: rgb(0, 0, 0)"></div>
  </div>
  <!-- NEWSLETTER -->
  <div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <div class="newsletter">
            <p>Unete a nuestro canal de <strong>DISCORD</strong></p>
            <div class="discord">
              <a href="https://discord.gg/ydbRaVq5"><img
                  src="../img/discord.png"
                  alt="Discord"
                  width="750px"
                  class="discord_img" /></a>
            </div>
            <ul class="newsletter-follow">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="ri-twitter-line"></i></a>
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
                  <a href="#"><i class="fa fa-map-marker"></i>Carrer del Pallars, 4,
                    Can Bassa, Granollers</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-phone"></i>+34-610-6987-88</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-envelope-o"></i>ArcticWeditorial@gmail.com</a>
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
                <li>
                  <a href="##">FAQs</a>
                </li>
                <li>
                  <a href="##">Resenyes</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="footer">
              <h3 class="footer-title">Servei</h3>
              <ul class="footer-links">
                <li><a href="#">Compte</a></li>
                <li><a href="#">Carro</a></li>
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
    <!-- Boton de asistente iniicio -->
    <button
      class="assistant-btn"
      onclick="toggleAssistant()"
      style="z-index: 999">
      🐺
    </button>

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
        <button onclick="sendFAQ('Com et dius?')">Com et dius?</button>9
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

    <!-- Final boton asistente  -->

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
  <script src="../js/banner.js"></script>
  <script src="../js/swiper.slide.js"></script>
  <script src="../js/asistente.js"></script>
  <script src="../js/button.js"></script>
  <script> const searchInput = document.getElementById("searchInput"); 
  const searchButton = document.getElementById("searchButton"); 
  function filtrarContenido() { const texto = searchInput.value.toLowerCase(); 
  const elementos = document.querySelectorAll(".searchable"); 
  elementos.forEach(el => { const contenido = el.textContent.toLowerCase(); 
    if (contenido.includes(texto)) { el.style.display = "block"; } 
    else { el.style.display = "none"; } }); } 
  // Buscar al hacer clic 
  searchButton.addEventListener("click", filtrarContenido); 
  // Buscar mientras se escribe 
  searchInput.addEventListener("input", filtrarContenido); 
  </script>
</body>

</html>