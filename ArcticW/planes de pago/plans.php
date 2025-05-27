<?php include("../php/config.php");
include("../php/carrito.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Plans de pagament</title>
</head>

<body>
  <div class="container">

    <!-- Arctic Pro Plan -->
    <div class="split left">
      <h1 style="color: white;">Arctic Pro®</h1>
      <form action="" method="POST">
        <input type="hidden" name="nombre" value="Arctic Pro">
        <input type="hidden" name="precio" value="19.99">
        <input type="hidden" name="tipo" value="Individual">
        <input type="hidden" name="cantidad" value="1">
        <button type="submit" name="btnaccion" value="agregar" class="btn" style="color: black;">Compra ara</button>
      </form>
      <div class="links">
        <a href="../../index.php"><strong><u>Continuar amb el pla actual</u></strong></a>
        <a href="plansescrito.html"><strong><u>Saber més sobre els plans</u></strong></a>
        <a href="/ArcticW/php/checkout.php"><strong><u>Anar a la cistella</u></strong></a>
      </div>
    </div>

    <!-- Arctic Family Plan -->
    <div class="split right">
      <h1 style="color: white;">Arctic Family®</h1>
      <form action="" method="POST">
        <input type="hidden" name="nombre" value="Arctic Family">
        <input type="hidden" name="precio" value="29.99">
        <input type="hidden" name="tipo" value="Familiar">
        <input type="hidden" name="cantidad" value="1">
        <button type="submit" name="btnaccion" value="agregar" class="btn" style="color: black;">Compra ara</button>
      </form>
      <div class="links">
        <a href="index.html"><strong><u>Continuar amb el pla actual</u></strong></a>
        <a href="plansescrito.html"><strong><u>Saber més sobre els plans</u></strong></a>
        <a href="/ArcticW/php/checkout.php"><strong><u>Anar a la cistella</u></strong></a>
      </div>
    </div>

    <li>
      <div class="alert alert-succes">
        <?php echo $mensaje; ?>
        <a href="/ArticW/php/checkout.php" class="nav__link"><i class="ri-shopping-cart-2-line">
            (<?php
              echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
              ?>)</i></a>
      </div>
    </li>



    <script src="script.js"></script>
</body>

</html>