<?php include("../php/config.php");
include("../php/carrito.php");
?>

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
  <!-- CSS- LIBROS -->
  <link rel="stylesheet" href="../css/libros-orden.css" />
  <!-- CSS-Botón -->
  <link rel="stylesheet" href="../css/button.css" />
  <!-- CSS-Botón-->
  <link rel="stylesheet" href="../css/asistente.css" />
  <link rel="stylesheet" href="../css/asimismo.css">

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
            <div class="alert alert-succes">
              <?php echo $mensaje; ?>
              <a href="checkout.php" class="nav__link"><i class="ri-shopping-cart-2-line">
                  (<?php
                    echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
                    ?>)</i></a>
            </div>
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
        <!-- Product main img -->
        <div class="col-md-5 col-md-push-2">
          <div id="product-main-img">
            <div class="product-preview">
              <img
                src="../img/Portadas/10.jpg"
                alt="100años-soledad"
                height="600px" />
            </div>

            <div class="product-preview">
              <img src="../img/Hojas_libro/100años/100años(1).png" alt="" />
            </div>

            <div class="product-preview">
              <img src="../img/Hojas_libro/100años/100años(2).png" alt="" />
            </div>

            <div class="product-preview">
              <img src="../img/Hojas_libro/100años/100años(4).jpg" alt="" />
            </div>
          </div>
        </div>
        <!-- /Product main img -->

        <!-- Product thumb imgs -->
        <div class="col-md-2 col-md-pull-5">
          <div id="product-imgs">
            <div class="product-preview">
              <img src="../img/Portadas/10.jpg" alt="pagina de prueba" />
            </div>

            <div class="product-preview">
              <img
                src="../img/Hojas_libro/100años/100años(1).png"
                alt="pagina de prueba" />
            </div>

            <div class="product-preview">
              <img
                src="../img/Hojas_libro/100años/100años(2).png"
                alt="pagina de prueba" />
            </div>

            <div class="product-preview">
              <img
                src="../img/Hojas_libro/100años/100años(4).jpg"
                alt="pagina de prueba" />
            </div>
          </div>
        </div>
        <!-- /Product thumb imgs -->

        <!-- Product details -->
        <form action="" method="post">
          <div class="col-md-5">
            <div class="product-details">
              <h2 class="product-name" name="nombre" value="Cien años de Soledad">
                Cien años de soledad (Edició aniversari) (Contemporanea)
              </h2>
              <div>
                <div class="product-rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <a class="review-link" href="#">10 Opinion(s) | Afegeix la teva opinió
                </a>
              </div>
              <div>
                <h3 class="product-price" name="precio" value="11.00">
                  Є7.00 <del class="product-old-price">Є11.00</del>
                  <span style="font-size: 20px">-36%</span>
                </h3>
              </div>
              <p>
                Vet aquí una de les novel·les més importants del segle XX i una
                de les aventures literàries més fascinants de tots els temps.
                Milions d'exemplars de Cent anys de solitud llegits en totes les
                llengües i el Premi Nobel de Literatura coronant una obra que
                s'havia obert pas "boca a boca" -com agradava dir l'escriptor-
                són la més palpable demostració que l'aventura fabulosa de la
                família Buendía-Iguarán, amb els seus miracles, fantasies,
                obsessions, tragèdies, incestos, adulteris, rebel·lies,
                descobriments i condemnes, representava alhora el mite i la
                història, la tragèdia i l'amor del món sencer.
              </p>
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

    <!-- Product tab -->
    <div class="col-md-12">
      <div id="product-tab">
        <!-- product tab nav -->
        <ul class="tab-nav">
          <li class="active">
            <a data-toggle="tab" href="#tab1">Descripció</a>
          </li>
          <li><a data-toggle="tab" href="#tab2">Detalls</a></li>
          <li><a data-toggle="tab" href="#tab3">Opinions</a></li>
        </ul>
        <!-- /product tab nav -->

        <!-- product tab content -->
        <div class="tab-content">
          <!-- tab1  -->
          <div id="tab1" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-12">
                <p>
                  <strong>Biografia de l'autor:</strong> Gabriel García
                  Márquez (1927-2014), nascut a Colòmbia, és una de les
                  figures més importants i influents de la literatura
                  universal. Guanyador del Premi Nobel de Literatura el
                  1982, va ser, a més de novel·lista, contista, assagista,
                  crític cinematogràfic, autor de guions i, sobretot, un
                  intel·lectual compromès amb els grans problemes del
                  nostre temps, i en primer terme amb els que afectaven a
                  la seva estimada Colòmbia ia Hispanoamèrica en general.
                  Màxima figura de l'anomenat «realisme màgic», en què
                  història i imaginació teixeixen el tapís d'una
                  literatura viva, que respira per tots els porus, va ser
                  en definitiva el faedor d'un dels mons narratius més
                  densos de significat que ha donat la llengua espanyola
                  al segle XX. Entre les seves novel·les més importants
                  figuren Cent anys de solitud, El coronel no té qui
                  l'escrigui, Relat d'un nàufrag, Crònica d'una mort
                  anunciada, La mala hora, El general al laberint, el
                  llibre de relats Dotze contes pelegrins, L'amor en el
                  temps del còlera i la Diatriba d'amor contra un home
                  assegut. L'any 2002 va publicar la primera part de la
                  seva autobiografia, Vivir para contarla; el 2004 va
                  tornar a la ficció amb Memòries de les meves putes
                  tristos, i el 2012 els seus relats van ser recopilats a
                  Todos los contes. A l'agost ens veiem (2024) és la seva
                  novel·la inèdita.
                </p>
              </div>
            </div>
          </div>
          <!-- /tab1  -->

          <!-- tab2  -->
          <div id="tab2" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-12">
                <p>
                  Idioma: Español <br />
                  496 páginas <br />
                  ISBN-10: 8497592204 <br />
                  ISBN-13: 978-8497592208 <br />
                  Classificació als més venuts d'arctic wolves: nº4 a
                  Llibres
                </p>
              </div>
            </div>
          </div>
          <!-- /tab2  -->

          <!-- tab3  -->
          <div id="tab3" class="tab-pane fade in">
            <div class="row">
              <!-- Rating -->
              <div class="col-md-3">
                <div id="rating">
                  <div class="rating-avg">
                    <span>4.5</span>
                    <div class="rating-stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                  <ul class="rating">
                    <li>
                      <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="rating-progress">
                        <div style="width: 80%"></div>
                      </div>
                      <span class="sum">3</span>
                    </li>
                    <li>
                      <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="rating-progress">
                        <div style="width: 60%"></div>
                      </div>
                      <span class="sum">2</span>
                    </li>
                    <li>
                      <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="rating-progress">
                        <div></div>
                      </div>
                      <span class="sum">0</span>
                    </li>
                    <li>
                      <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="rating-progress">
                        <div></div>
                      </div>
                      <span class="sum">0</span>
                    </li>
                    <li>
                      <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="rating-progress">
                        <div></div>
                      </div>
                      <span class="sum">0</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /Rating -->

              <!-- Reviews -->
              <div class="col-md-6">
                <div id="reviews">
                  <ul class="reviews">
                    <li>
                      <div class="review-heading">
                        <h5 class="name">Sonia</h5>
                        <p class="date">05/02/2025, 18:00pm</p>
                        <div class="review-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o empty"></i>
                        </div>
                      </div>
                      <div class="review-body">
                        <p>
                          Excelente obra, llena no solo de cotidianidad
                          colombiana, sino también de realidades de toda
                          Latinoamérica. Lo leí por primera vez con 19
                          años, en esta segunda oportunidad 15 años más
                          tarde, es impresionante el impacto del
                          entendimiento.
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="review-heading">
                        <h5 class="name">Carlos</h5>
                        <p class="date">04/02/2025, 14:00pm</p>
                        <div class="review-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o empty"></i>
                        </div>
                      </div>
                      <div class="review-body">
                        <p>
                          Fue muy grato recordar la gran experiencia al
                          retomar el libro y volver a encontrar la esencia
                          del Realismo Mágico
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="review-heading">
                        <h5 class="name">Antony</h5>
                        <p class="date">02/02/2025 20:00pm</p>
                        <div class="review-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o empty"></i>
                        </div>
                      </div>
                      <div class="review-body">
                        <p>
                          Encontrarme de nuevo con Cien Años de Soledad,
                          después de 3 lecturas previas, ha permitido
                          despertar en mi ser la alegría del amor y la
                          tristeza de la soledad. Difícil expresar con
                          palabras la sensación que tengo, pero fue como
                          si leyera por primera vez tan magistral obra y
                          al mismo tiempo rescatar del recuerdo imágenes
                          ya almacenadas. Inolvidable Gabriel García
                          Márquez
                        </p>
                      </div>
                    </li>
                  </ul>
                  <ul class="reviews-pagination">
                    <li class="active">1</li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>
                      <a href="#"><i class="fa fa-angle-right"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /Reviews -->

              <!-- Review Form -->
              <div class="col-md-3">
                <div id="review-form">
                  <form class="review-form">
                    <input
                      class="input"
                      type="text"
                      placeholder="Your Name" />
                    <input
                      class="input"
                      type="email"
                      placeholder="Your Email" />
                    <textarea
                      class="input"
                      placeholder="Your Review"></textarea>
                    <div class="input-rating">
                      <span>Your Rating: </span>
                      <div class="stars">
                        <input
                          id="star5"
                          name="rating"
                          value="5"
                          type="radio" /><label for="star5"></label>
                        <input
                          id="star4"
                          name="rating"
                          value="4"
                          type="radio" /><label for="star4"></label>
                        <input
                          id="star3"
                          name="rating"
                          value="3"
                          type="radio" /><label for="star3"></label>
                        <input
                          id="star2"
                          name="rating"
                          value="2"
                          type="radio" /><label for="star2"></label>
                        <input
                          id="star1"
                          name="rating"
                          value="1"
                          type="radio" /><label for="star1"></label>
                      </div>
                    </div>
                    <button class="primary-btn">Submit</button>
                  </form>
                </div>
              </div>
              <!-- /Review Form -->
            </div>
          </div>
          <!-- /tab3  -->
        </div>
        <!-- /product tab content  -->
      </div>
    </div>
    <!-- /product tab -->
  </div>
  <!-- /row -->
  </div>
  <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- Section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h3 class="title">Productes relacionats</h3>
          </div>
        </div>

        <!-- /product -->
        <div class="col-md-3 col-xs-6">
          <div class="product">
            <div class="container2">
              <div class="box-out">
                <div class="book books-1"></div>
              </div>
            </div>
            <div class="product-body">
              <p class="product-category">Romanç</p>
              <h3 class="product-name">
                <a href="#">lo que el viento se llevo</a>
              </h3>
              <h4 class="product-price">
                Є7.00 <del class="product-old-price">Є10.00</del>
              </h4>
              <div class="product-rating"></div>
            </div>
            <div class="add-to-cart">
              <button class="add-to-cart-btn">
                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
              </button>
            </div>
          </div>
        </div>
        <!-- /product -->
        <!-- /product -->
        <div class="col-md-3 col-xs-6">
          <div class="product">
            <div class="container2">
              <div class="box-out">
                <div class="book books-2"></div>
              </div>
            </div>
            <div class="product-body">
              <p class="product-category">Estrategia</p>
              <h3 class="product-name">
                <a href="#">El libro de los 5 anillos</a>
              </h3>
              <h4 class="product-price">
                Є7.00 <del class="product-old-price">Є10.00</del>
              </h4>
              <div class="product-rating"></div>
            </div>
            <div class="add-to-cart">
              <button class="add-to-cart-btn">
                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
              </button>
            </div>
          </div>
        </div>
        <!-- /product -->
        <!-- /product -->
        <div class="col-md-3 col-xs-6">
          <div class="product">
            <div class="container2">
              <div class="box-out">
                <div class="book books-3"></div>
              </div>
            </div>
            <div class="product-body">
              <p class="product-category">Filosofia</p>
              <h3 class="product-name">
                <a href="#">Platon La republica</a>
              </h3>
              <h4 class="product-price">
                Є7.00 <del class="product-old-price">Є10.00</del>
              </h4>
              <div class="product-rating"></div>
            </div>
            <div class="add-to-cart">
              <button class="add-to-cart-btn">
                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
              </button>
            </div>
          </div>
        </div>
        <!-- /product -->
        <!-- /product -->
        <div class="col-md-3 col-xs-6">
          <div class="product">
            <div class="container2">
              <div class="box-out">
                <div class="book books-4"></div>
              </div>
            </div>
            <div class="product-body">
              <p class="product-category">Militar</p>
              <h3 class="product-name">
                <a href="#">El arte de la guerra</a>
              </h3>
              <h4 class="product-price">
                Є8.00 <del class="product-old-price">Є10.00</del>
              </h4>
              <div class="product-rating"></div>
            </div>
            <div class="add-to-cart">
              <button class="add-to-cart-btn">
                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
              </button>
            </div>
          </div>
        </div>
        <!-- /product -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /Section -->

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

</body>

</html>