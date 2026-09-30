<?php
include("conexion.php");
 
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
 
if ($id <= 0) {
    echo "ID inválido.";
    exit;
}
 
 
$sql = "SELECT * FROM furryshop WHERE Productos_id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="ver_mas_productos.css"> 
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
 
<?php if ($resultado && $resultado->num_rows > 0) {
    $producto = $resultado->fetch_assoc();
?>
    <div class="product-profile-container">
        <div class="product-card">
           
            <div class="product-image-left">
                <img class="main-product-image" src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="<?php echo htmlspecialchars($producto['nombreProducto']); ?>">
            </div>
 
           
            <div class="product-details-right">
                <h2><?php echo htmlspecialchars($producto['nombreProducto']); ?></h2>
                <p><strong>Descripción:</strong> <?php echo htmlspecialchars($producto['descripcionProducto']); ?></p>
                <p><strong>Precio:</strong> $<?php echo number_format($producto['precio'], 2); ?></p>
                <button class="add-to-cart-btn">🛒 Añadir al carrito</button>
 
                <div class="product-thumbnails">
                    <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="Vista extra 1" class="thumbnail">
                    <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="Vista extra 1" class="thumbnail">
                    <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="Vista extra 1" class="thumbnail">
                    <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="Vista extra 2" class="thumbnail">
                </div>
            </div>
        </div>
    </div>
<?php
} else {
    echo "<p style='text-align:center; padding: 40px;'>Producto no encontrado.</p>";
}
?>

 <script src="navbar2.js"></script>
</body>
</html>
 