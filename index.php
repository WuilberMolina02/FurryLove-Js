<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="comcarr.css">
    <link rel="stylesheet" href="navbar.css">
    <title>Homepage</title>
</head>
<body>

<!-- LOGO -->
<div style="text-align: center; padding: 20px; background-color: white;">
  <img src="imagenes/logo.png" alt="Logo FurryFriends" style="height: 50px; vertical-align: middle; margin-right: 10px;">
  <span style="font-size: 32px; color: #444; font-weight: 600;">
     Furrylove✨🐾
  </span>
</div>

<!-- NAVBAR -->
<nav>
  <div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="perrosGatos.html">Adopta Ya</a>
    <a href="nosotros.html">Sobre Nosotros</a>
    <a href="furryshop.php">FurryShop</a>
    <a href="refugios.php" class="active-link">Refugios</a>
    <a href="registro.php">Registro/Iniciar sesión</a>
  </div>
  <div id="hamburger" class="hamburger">&#9776;</div>
</nav>

<!-- MENÚ LATERAL MÓVIL -->
<div id="sideMenu" class="side-menu">
  <a href="javascript:void(0)" class="close-btn" id="closeBtn">&times;</a>
  <div class="menu-links">
    <a href="index.php">Inicio</a>
    <a href="perrosGatos.html">Adopta Ya</a>
    <a href="nosotros.html">Sobre Nosotros</a>
    <a href="furryshop.php">FurryShop</a>
    <a href="refugios.php" class="active-link">Refugios</a>
    <a href="registro.php">Registro/Iniciar sesión</a>
  </div>
</div>

<!-- FONDO OSCURO PARA MÓVIL -->
<div id="overlay" class="overlay"></div>

<section class="banner py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
        <h1>
          “Adopta y transforma una vida, con <strong>FurryLove</strong> haz la diferencia, adopta con el corazón”
        </h1>
      </div>

      <div class="col-md-6 text-center">
        <img src="imagenes/gato-e-cachorro-juntos-olhando-para-a-camera-isolada-em-branco_191971-28715-removebg-preview.png"
             alt="Gato y perro"
             class="img-fluid banner-img"
             width="600" height="400">
      </div>
    </div>
  </div>
</section>

<section class="hero">
  <h2>¡Ellos te están esperando! 🐶🐱</h2>
  <p>Conecta con refugios de El Salvador y cambia una vida adoptando a un amigo peludo.</p>
</section>

<section class="imagenes">
  <?php
  include("conexion.php");

  $sql_perros = "SELECT nombre, imagen_url FROM perros LIMIT 4";
  $resultado_perros = $conexion->query($sql_perros);

  if ($resultado_perros->num_rows > 0) {
      while ($fila = $resultado_perros->fetch_assoc()) {
          echo '<div class="cuadro">';
          echo '<img src="imagenes/' . htmlspecialchars($fila["imagen_url"]) . '" alt="Mascota">';
          echo '<p>Nombre: <strong>' . htmlspecialchars($fila["nombre"]) . '</strong></p>';
          echo '</div>';
      }
  } else {
      echo "<p>No hay perros disponibles.</p>";
  }
  ?>
</section>


<div class="furryshop-section">
  <h2>🐾 Productos de FurryShop</h2>
  <div class="carousel">
    <div class="carousel-track">
      <?php
      $sql_productos = "SELECT nombreProducto, imagen FROM furryshop LIMIT 4";
      $resultado_productos = $conexion->query($sql_productos);

      if ($resultado_productos->num_rows > 0) {
          while ($producto = $resultado_productos->fetch_assoc()) {
              echo '<div class="carousel-item">';
              echo '<img src="imagenes/' . htmlspecialchars($producto["imagen"]) . '" alt="' . htmlspecialchars($producto["nombreProducto"]) . '">';
              echo '<p>' . htmlspecialchars($producto["nombreProducto"]) . '</p>';
              echo '</div>';
          }
      } else {
          echo "<p>No hay productos disponibles.</p>";
      }
      ?>
    </div>
  </div>
  <a href="furryshop.php" class="furryshop-button">Ir a FurryShop 🛒</a>
</div>


<div class="container">

  <div class="card comentarios">
    <h2>Déjanos tu mensaje 💬</h2>
    <div class="comentario-box">
      <p><strong>🐾 Usuario123:</strong> Me parece súper útil esta app, muy completa y amigable. ¡Ya adopté a mi perrito!</p>
      <p class="responder">1d · ❤️ 45 · 🔁 22</p>
      <input type="text" placeholder="Escribe tu comentario...">
      <button>Enviar</button>
    </div>
  </div>
</div>
 
 <footer class="footer">
  <div class="footer-content">
    <h2>FurryLove</h2>
    <p>&copy; 2025 FurryLove. Todos los derechos reservados.</p>
  </div>
</footer>


  <script src="navbar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>