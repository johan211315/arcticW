
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arctic - Mi Biblioteca</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      font-family: Arial, sans-serif;
    }

    .background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('bg2.jpg') no-repeat center center/cover;
      z-index: -1;
    }

    .content {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
      padding: 2rem;
      flex-grow: 1;
    }

    .card-row {
      display: flex;
      gap: 1rem;
      justify-content: center;
      transition: all 0.4s;
      flex-wrap: wrap;
    }

    .card {
      flex: 0 0 auto;
      height: 280px;
      width: 230px;
      cursor: pointer;
      border-radius: 1.5rem;
      overflow: hidden;
      transition: all 0.4s;
      position: relative;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-color: white;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s;
    }

    .title {
      position: absolute;
      bottom: 55px;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      text-align: center;
      padding: 0.5rem;
      font-size: 1.1rem;
    }

    .card-content {
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 0.5rem;
      text-align: center;
    }

    .btn-pedido {
      margin-top: 5px;
      background-color: red;
      color: white;
      border: none;
      padding: 8px 14px;
      font-size: 1rem;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .btn-pedido:hover {
      background-color: darkred;
    }

    .navbar-center {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-weight: bold;
      font-size: 1.1rem;
    }

    footer {
      background-color: black;
      color: white;
      text-align: center;
      padding: 1rem;
    }
  </style>
</head>
<body>
  <div class="background"></div>
  <div class="content">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
      <div class="container-fluid position-relative">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
          <img src="LOGOKIDS.png" alt="Logo Librería Kids" width="50" class="me-2">
          <span class="fw-bold">Arctic Wolves®</span>
        </a>

        <!-- NOMBRE EN EL CENTRO -->
        <span class="navbar-text mx-auto text-white fw-bold d-none d-lg-block">
          <?php echo $nombre_usuario; ?>
        </span>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="kids.html">Inici</a></li>
            <li class="nav-item"><a class="nav-link" href="libros.html">Kids</a></li>
            <li class="nav-item"><a class="nav-link" href="Teens.html">Teens</a></li>
            <li class="nav-item"><a class="nav-link" href="biblioteca.php">Tornar a Arctic Base</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container">
      <div class="card-row">
        <?php
        // Consulta para obtener los libros comprados por el usuario
        $query = "SELECT libros.titulo, libros.archivo, libros.id 
                  FROM compras 
                  JOIN libros ON compras.libro_id = libros.id 
                  WHERE compras.usuario_id = $usuario_id";

        $resultado = $conexion->query($query);

        // Comprobar si hay libros comprados
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $titulo = htmlspecialchars($fila['titulo']);
                $archivo = htmlspecialchars($fila['archivo']); // nombre de imagen
                $id = (int)$fila['id'];
                echo "
                <div class='card'>
                  <img src='img/$archivo' alt='Portada de $titulo'>
                  <div class='title'>$titulo</div>
                  <div class='card-content'>
                    <button class='btn-pedido' onclick=\"window.location.href='lector.php?id=$id'\">Llegir</button>
                  </div>
                </div>
                ";
            }
        } else {
            echo "<p>No has comprado libros aún.</p>";
        }
        ?>
      </div>
    </div>

    <footer>
      &copy; 2025 Arctic Wolves®. Tots els drets reservats.
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
