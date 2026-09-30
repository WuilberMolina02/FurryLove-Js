<?php
include("connection.php");
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="comcarr2.css">
    <link rel="stylesheet" href="navbar2.css">
    <title>Homepage</title>
</head>
<body>

<div class="brand-header">
  <img src="imagenes/logo.png" alt="Logo FurryFriends" class="brand-logo">
  <span class="brand-title">Furrylove✨🐾</span>
</div>
 
<!-- Navbar -->
<nav>
  <!-- Navbar horizontal (PC) -->
  <div class="navbar">
    <a href="homepage.php">Inicio</a>
    <a href="perrosGatos.html">Adopta Ya</a>
    <a href="nosotros.html">Sobre Nosotros</a>
    <a href="furryshop.php">FurryShop</a>
    <a href="refugios.php">Refugios</a>
    <div class="dropdown">
      <a class="dropbtn">Cuenta</a>
      <div class="dropdown-content">
        <a href="#">Mi perfil</a>
        <a href="#">Mis solicitudes</a>
        <a href="logout.php">Cerrar sesión</a>
      </div>
    </div>
  </div>
 
  <!-- Botón hamburguesa (móvil) -->
  <span class="hamburger">&#9776;</span>
 
  <!-- Sidebar (móvil) -->
  <div class="side-menu" id="sideMenu">
    <a href="javascript:void(0)" class="close-btn" id="closeBtn">&times;</a>
    <div class="menu-links">
      <a href="homepage.php">Inicio</a>
      <a href="perrosGatos.html">Adopta Ya</a>
      <a href="nosotros.html">Sobre Nosotros</a>
      <a href="furryshop.php">FurryShop</a>
      <a href="refugios.php">Refugios</a>
      <div class="dropdown">
        <button class="dropbtn">Cuenta ▾</button>
        <div class="dropdown-content">
          <a href="#">Mi perfil</a>
          <a href="#">Mis solicitudes</a>
          <a href="logout.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<section class="banner py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
        <h1 class="letra">¡Bienvenido <?php echo htmlspecialchars($_SESSION['nombre']); ?> a FurryLove 🐾💖!</h1>
          <h2 class="letra">Nos alegra tenerte aquí, explora y encuentra a tu nuevo amigo peludo.</h2>
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


  <script src="navbar2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>