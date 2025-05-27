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

  <title>Merchandaising</title>

  <!-- Google font -->
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700"
    rel="stylesheet" />
  <!-- Navbar icon-->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    <link
    rel="stylesheet" />
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
  <!-- CSS-Asistente -->
  <link rel="stylesheet" href="../css/asistente.css" />
  <!-- CSS-merch -->
  <!-- <link rel="stylesheet" href="../css/merch.css" /> -->

  <!-- Tienda Merch -->
  <link rel="stylesheet" href="../css/asimismo.css">
  <link rel="stylesheet" href="../css/nuevo_merch.css">
  <link rel="stylesheet" href="../css/destacados_merchand.css">
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
          <li><a href="/ArcticW/kids/pruebakids/lesik/kids.html" class="nav__link">Nens</a></li>
          <li><a href="/ArcticW/biblioteca/biblioteca.html" class="nav__link">Biblioteca</a></li>
          <!--=============== DROPDOWN 1 TIENDA ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
              <a href="../html/tienda.html"></a>Botiga
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
                    <a href="../php/todomerch.php" class="dropdown__sublink">
                      <i class="ri-shirt-line"></i> Ver Todo
                    </a>
                    <!-- </li>
                    <li>
                      <a href="" class="dropdown__sublink">
                        <i class="ri-shirt-line"></i> Tases
                      </a>
                    </li>
                    <li>
                      <a href="" class="dropdown__sublink">
                        <i class="ri-shirt-line"></i> Stickers
                      </a>
                    </li>
                    <li>
                      <a href="#" class="dropdown__sublink">
                        <i class="ri-shirt-line"></i> Posters
                      </a>
                    </li> -->
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


  <!-- BREADCRUMB
    <div id="breadcrumb" class="section">
      <!-- container -->
  <!-- <div class="container">
        <!-- row -->
  <!-- <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb-tree">
              <li><a href="#">Botiga</a></li>
              <li><a href="#">Llibres</a></li>
              <li><a href="#">Novela</a></li>
              <li class="active">100 años de soledad</li> -->
  <!-- </ul>
          </div>
        </div> -->
  <!-- /row -->
  <!-- </div> -->
  <!-- /container -->
  <!-- </div> -->
  --> -->
  <!-- /BREADCRUMB -->

  <!-- Apartado Merch -->
  <main>
    <div class="marcel1">
      <p id="destacados"><b>DESTACATS</b></p>
      <div class="fondomov">
        <div class="autores2">
          <div class="clase1">
            <div class="container-carousel">
              <img src="../img/merch/camiseta.png" />
            </div>
            <div class="marcel"></div>
            <p>Samarreta</p>
          </div>
          <div class="clase1">
            <div class="container-carousel">
              <img src="../img/merch/sudadera.png" />
            </div>
            <div class="marcel"></div>
            <p>Dessuadora</p>
          </div>
          <div class="clase1">
            <div class="container-carousel">
              <img src="../img/merch/gorra.png" />
            </div>
            <div class="marcel"></div>
            <p>Gorra</p>
          </div>
          <div class="clase1">
            <div class="container-carousel">
              <img src="../img/merch/pin.png" />
            </div>
            <div class="marcel"></div>
            <p>Pin</p>
          </div>
          <div class="clase1">
            <div class="container-carousel">
              <img src="../img/merch/peluche.png" />
            </div>
            <div class="marcel"></div>
            <p>Peluix</p>
          </div>
          <div class="clase1">
            <div class="container-carousel">
              <img src="../img/merch/bolsa.png" />
            </div>
            <div class="marcel"></div>
            <p>Bossa + Marcapagines</p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Imagen Merch -->
  <div class="arreglachapuzas">
    <div id="merch">
      <p>Més articles afegits</p>
      <h3>Rebaixes</h3>
      <h2>Fins a -60%</h2>
      <a id="alpaca" href="../php/todomerch.php"><button><b>Veure-ho tot</b></button></a>
    </div>
  </div>

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
                  <a href="https://maps.app.goo.gl/oop5xCGA1AdF4o9r9"><i class="fa fa-map-marker"></i>Carrer del Pallars, 4,
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../js/button.js"></script>
  <script src="../js/asistente.js"></script>
  <script>
function performSearch() {
    const searchTerm = document.getElementById('searchInput').value.trim().toLowerCase();
    const elementsToSearch = document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, li, td, a');
    let firstMatch = null;

    if (!searchTerm) return;

    elementsToSearch.forEach(element => {
        const elementText = element.textContent.toLowerCase();
        
        if (elementText.includes(searchTerm) && !firstMatch) {
            firstMatch = element;
        }
    });

    if (firstMatch) {
        // Calcular posición para centrar
        const elementPosition = firstMatch.getBoundingClientRect().top + window.pageYOffset;
        const offsetPosition = elementPosition - (window.innerHeight / 2);
        
        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }
}

// Eventos (mantenemos los mismos)
document.getElementById('searchButton').addEventListener('click', performSearch);
document.getElementById('searchInput').addEventListener('input', performSearch);
document.getElementById('searchInput').addEventListener('keypress', (e) => {
    if (e.key === 'Enter') performSearch();
});
</script>
</body>

</html>