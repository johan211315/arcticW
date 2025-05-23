<?php
session_start();

// Conexión a la base de datos
include('includes/db_connection.php');

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['idusuario'])) {
    $idusuario = $_SESSION['idusuario'];

    // Obtener el nombre de usuario
    $query = "SELECT usuario FROM usuarios WHERE idusuario = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $idusuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
} else {
    $user = null;
}
?>

<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Paginas CSS-->
    <link rel="stylesheet" href="/ArcticW/css/nav_home.css">
    <link rel="stylesheet" href="/ArcticW/css/extension_home.css" />
    <link rel="stylesheet" href="./ArcticW/css/comprimible.cs.css" />

    <!-- links anidados -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

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
          <a href="../../index.php" class="nav__logo">
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
            <li><a href="/index.php" class="nav__link">Home</a></li>
            <li><a href="../../index.php#atribhomeid">Sobre Nosaltres</a></li>
            <li><a href="/ArcticW/kids/pruebakids/lesik/kids.html" class="nav__link">Nens</a></li>
            <!--=============== DROPDOWN 1 TIENDA ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
                <a href="/ArcticW/php/tienda.php"  class="nav__link">Botiga</a>
              </div>
            </li>
            <!--=============== DROPDOWN MENU CUENTA ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
                <?php if ($user): ?>
                  Hola, <?= $user['usuario']; ?> 
                  <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                <?php else: ?>
                  El meu compte
                <?php endif; ?>
              </div>
              <ul class="dropdown__menu">
                <?php if ($user): ?>
                  <li><a href="/ArcticW/php/mi_biblioteca.php" class="dropdown__link"><i class="ri-book-2-line"></i> La meva biblioteca</a></li>
                  <li><a href="/ArcticW/php/logout.php" class="dropdown__link"><i class="ri-user-unfollow-line"></i> Tancar sessió</a></li>
                <?php else: ?>
                  <li><a href="/ArcticW/php/login.php" class="dropdown__link"><i class="ri-user-2-line"></i> Iniciar sessió</a></li>
                  <li><a href="/ArcticW/php/register.php" class="dropdown__link"><i class="ri-user-shared-fill"></i> Registrar-se</a></li>
                <?php endif; ?>
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

      <!-- Sección de libros disponibles si el usuario está logueado -->
      <?php if ($user): ?>
        <div class="store-books">
          <h3>Libros disponibles para comprar</h3>
          <div class="books-container">
            <?php
            $query = "SELECT * FROM libros_digitales";
            $result = $mysqli->query($query);

            while ($row = $result->fetch_assoc()):
            ?>
              <div class="book-item">
                <img src="/ArcticW/img/Portadas/<?= $row['imagen']; ?>" alt="<?= $row['titulo']; ?>" />
                <h4><?= $row['titulo']; ?></h4>
                <p><?= $row['autor']; ?></p>
                <p>Precio: <?= $row['precio']; ?>€</p>
                <a href="/ArcticW/php/comprar.php?idlibro=<?= $row['ID']; ?>" class="btn-buy">Comprar</a>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Equipo -->
      <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="atribhome">
          <div class="pershom">
            <img src="/ArcticW/img/img/jojan.jpg" alt="Johan Aricapa" >
            <h4>Johan Aricapa</h4>
            <p>Administrador servicio web</p>
          </div>
          <div class="pershom">
            <img src="/ArcticW/img/img/xusi-merda.jpg" alt="Josep Codina" >
            <h4>Josep Codina</h4>
            <p>Director creativo y soporte IT</p>
          </div>
          <div class="pershom">
            <img src="/ArcticW/img/img/izan.jpg" alt="Izan Barrasa" >
            <h4>Izan Barrasa</h4>
            <p>Administrador IT</p>
          </div>
          <div class="pershom">
            <img src="/ArcticW/img/img/marcel.jpg" alt="Marcel Collell">
            <h4>Marcel Collell</h4>
            <p>Administrador servidor</p>
          </div>
        </div>
      </div>

      <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="body2">
          <div class="container">
            <div class="panel active" style="background-image: url('./ArcticW/img/img/d35d4fb2-02f9-455b-aa42-c16c07559cbf.jpg')">
              <h3>Les nostres oficines</h3>
            </div>
            <div class="panel" style="background-image: url('./ArcticW/img/img/421ba73f-b365-4c3d-9ce5-fda30eb7fb9f.jpg')">
              <h3>Entrada</h3>
            </div>
            <div class="panel" style="background-image: url('./ArcticW/img/img/75aaffd7-7695-4ac3-93ab-673009e4f868.jpg')">
              <h3>Passadís</h3>
            </div>
            <div class="panel" style="background-image: url('./ArcticW/img/img/d3642efe-1d4a-4a19-be2f
-222b86a94939.jpg')">
<h3>Estudi</h3>
</div>
</div>
</div>
</div>
</main>
<footer>
<div class="social-links">
<a href="#" class="social-link"><i class="ri-facebook-line"></i></a>
<a href="#" class="social-link"><i class="ri-instagram-line"></i></a>
<a href="#" class="social-link"><i class="ri-twitter-line"></i></a>
<a href="#" class="social-link"><i class="ri-tiktok-line"></i></a>
</div>
</footer>
</body> 
</html>