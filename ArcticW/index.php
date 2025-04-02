<?php include("php/config.php"); ?>
<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Paginas CSS-->
    <link rel="stylesheet" href="/ArcticW/css/nav_home.css">
    <link rel="stylesheet" href="/ArcticW/css/extension_home.css" />

    <!-- links anidados -->
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="/ArcticW/css/font-awesome.min.css" />
    <!-- Navbar icon-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    
  </head>
  <body>
    <header class="header">
      <nav class="nav container">
        <div class="nav__data">
          <a href="#" class="nav__logo">
            <img
              src="/ArcticW/img/SELLO (CIRCULAR).png"
              alt="Logo"
              width="50px"
            />Artic Wolves
          </a>
          <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line nav__burger"></i>
            <i class="ri-close-line nav__close"></i>
          </div>
        </div>
        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li><a href="index.php" class="nav__link">Home</a></li>
            <li><a href="index.php" class="nav__link">Sobre nosaltres</a></li>
            <!--=============== DROPDOWN 1 TIENDA ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
              <a href="php/product.php" class="nav__link">Botiga</a>
              </div>
            </li>
            <!--=============== DROPDOWN MENU CUENTA ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
                El meu compte
                <i class="ri-arrow-down-s-line dropdown__arrow"></i>
              </div>
              <ul class="dropdown__menu">
                <li>
                  <a href="php/login.php" class="dropdown__link">
                    <i class="ri-user-2-line"></i> Inici Sessió
                  </a>
                </li>
                <li>
                  <a href="php/register.php" class="dropdown__link">
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
          </ul>
        </div>
      </nav>
    </header>
    <main class="main-home">
      <div class="video-bg">
        <video autoplay loop muted>
          <source src="/ArcticW/video/libro.mp4" type="video/mp4" />
        </video>
      </div>
      <div class="pag-princ">
        <div class="titulos">
          <div class="titulo1"><h2>Arctic Wolves</h2></div>
          <div class="titulo2"><h3>Proximament...</h3></div>
        </div>
        <div class="slider-container">
          <div class="slider position"></div>
        </div>
        <div class="fcontenedor">
          <div class="texto-prin">
            <h2 class="ftitulo">Paulo Coelho</h2>
            <p class="fsubtitulo">El Alquimista (1988)</p>
            <p class="ftexto">
              "Si no lluites pel que vols, no et queixis del que tens. La vida no
              et deu res, és la teva responsabilitat construir el teu propi camí,
              sense importar els obstacles, les caigudes o el que diran."
            </p>
          </div> 
          <div class="social-icons">
            <a href="#" target="_blank"
              ><img
                src="/ArcticW/img/Iconos/tiktok.png"
                alt="tik-tok"
                height="30px"
            /></a>
            <a href="#" target="_blank"
              ><img
                src="/ArcticW/img/Iconos/facebook.png"
                alt="facebook"
                height="30px"
            /></a>
            <a href="#" target="_blank"
              ><img
                src="/ArcticW/img/Iconos/instagram.png"
                alt="instagram"
                height="30px"
            /></a>
            <a href="#" target="_blank"
              ><img src="/ArcticW/img/Iconos/x.png" alt="x" height="30px">
            </a>
          </div>
        </div>
      </div>
      <div id="SEPARARMIERDADELJOHANGRACIAS"></div>
<br>
<br>
    <div class="atribhome">
      <div class="pershom">
        <img src="./EBWOLF/img/img/plantillafotojojan.jpg" alt="Johan Aricapa">
        <h4>Johan Aricapa</h4>
        <p>Administrador servicio web</p>
      </div>
      <div class="pershom">
        <img src="./EBWOLF/img/img/plantillafotojojan.jpg" alt="Josep Codina">
        <h4>Josep Codina</h4>
        <p>Director creativo y soporte IT</p>
      </div>
      <div class="pershonm">
        <img src="./EBWOLF/img/img/plantillafotojojan.jpg" alt="Izan Barrasa">
        <h4>Izan Barrasa</h4>
        <p>Administrador IT</p>
      </div>
    </div>
    <div class="pershom">
      <img src="./EBWOLF/img/img/plantillafotojojan.jpg" alt="Marcel Collell">
      <h4>Marcel Collell</h4>
      <p>Administrador servidor</p>
    </div>
      



    </main>

    <!-- jQuery Plugins -->
    <script src="/ArcticW/js/navbar.js"></script>
  </body>
</html>
