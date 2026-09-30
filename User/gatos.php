<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gatos</title>
  <link rel="stylesheet" href="gatos.css">
  <link rel="stylesheet" href="navbar2.css">
</head>
<body>

<!-- Header con logo y nombre -->
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

<div class="container">
  <h2 style="text-align:center; margin-bottom:30px;">
    ¡Hola, amante de los peluditos! 🐶🐱 Explora más sobre nuestros gatos.
  </h2>

  <div class="products">
    <?php

  include("conexion.php");
  $sql = "SELECT * FROM gatos";
$resultado = $conexion->query($sql);  


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo '<div class="product-card">';
            echo '<img src="' . $fila['imagen_url'] . '">';
            echo '<div class="product-info">';
            echo '<h3>' . htmlspecialchars($fila['nombre']) . '</h3>';
            echo '<p>' . htmlspecialchars($fila['descripcion']) . '</p>';
            echo '<p class="edad">' . htmlspecialchars($fila['edad'],) . '</p>';
            echo '<div class="actions">';
             echo '<a href="ver_mas_gatos.php?id=' . $fila['id_mascota'] . '" class="btn-vermas" style="padding: 5px 10px; background-color: #ffffac; color: black; border: none; border-radius: 5px; text-decoration: none;">Ver más</a>';
            echo '<button class="like-btn" onclick="toggleLike(this)" style="background: none; border: none; font-size: 20px; cursor: pointer;">🤍</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay productos disponibles.</p>';
    }
    $conexion->close();
    ?>
  </div>
</div>

<script src="navbar2.js"></script>
<script src="furryshop.js"></script>
</body>
</html>
