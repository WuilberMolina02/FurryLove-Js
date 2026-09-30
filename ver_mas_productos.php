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
    <a href="refugios.php">Refugios</a>
    <a href="registro.php">Registro/Iniciar sesión</a>
  </div>
</div>

<!-- FONDO OSCURO PARA MÓVIL -->
<div id="overlay" class="overlay"></div>
 
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
 
 <script src="navbar.js"></script>
</body>
</html>
 