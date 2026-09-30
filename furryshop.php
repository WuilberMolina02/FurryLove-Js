

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FurryShop</title>
  <link rel="stylesheet" href="furryshop.css">
  <link rel="stylesheet" href="navbar.css">
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

<div class="container">
  <h2 style="text-align:center; margin-bottom:30px;">
    ¡Hola, amante de los peluditos! 🐶🐱 Explora, consiente y apoya con cada compra.
  </h2>

  <div class="products">
    <?php
  include("conexion.php");
  $resultado = $conexion->query("SELECT * FROM furryshop"); 


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo '<div class="product-card">';
            echo '<img src="imagenes/' . htmlspecialchars($fila['imagen']) . '" alt="' . htmlspecialchars($fila['nombreProducto']) . '">';
            echo '<div class="product-info">';
            echo '<h3>' . htmlspecialchars($fila['nombreProducto']) . '</h3>';
            echo '<p>' . htmlspecialchars($fila['descripcionProducto']) . '</p>';
            echo '<p class="price">$' . number_format($fila['precio'], 2) . '</p>';
            echo '<div class="actions">';
            echo '<a href="ver_mas_productos.php?id=' . $fila['Productos_id'] . '" class="btn-vermas" style="padding: 5px 10px; background-color: #ffffac; color: black; border: none; border-radius: 5px; text-decoration: none;">Ver más 🛒</a>';
            echo '<button class="btn fav">♥</button>';
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

<script src="navbar.js"></script>
<script src="furryshop.js"></script>
</body>
</html>
