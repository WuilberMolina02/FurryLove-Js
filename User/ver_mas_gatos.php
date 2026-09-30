<?php
include("conexion.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id <= 0) {
    echo "ID inválido.";
    exit;
}

$sql = "SELECT * FROM gatos WHERE id_mascota = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil del Gato</title>
    <link rel="stylesheet" href="ver_mas_gatos.css">
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

<?php if ($resultado->num_rows > 0) {
    $mascota = $resultado->fetch_assoc();
?>
    <div class="pet-profile-container">
        <div class="pet-card">
            <img class="pet-image" src="<?php echo htmlspecialchars($mascota['imagen_url']); ?>" alt="Foto de <?php echo htmlspecialchars($mascota['nombre']); ?>">
            <div class="pet-details">
                <h2><?php echo htmlspecialchars($mascota['nombre']); ?> 🐾</h2>
                <p><strong>Edad:</strong> <?php echo htmlspecialchars($mascota['edad']); ?></p>
                <p><strong>Tamaño:</strong> <?php echo htmlspecialchars($mascota['tamaño']); ?></p>
                <p><strong>Raza:</strong> <?php echo htmlspecialchars($mascota['raza']); ?></p>
                <p><strong>Peso:</strong> <?php echo htmlspecialchars($mascota['peso']); ?> kg</p>
                <p><strong>Género:</strong> <?php echo htmlspecialchars($mascota['genero']); ?></p>
                <p><strong>Refugio:</strong> <?php echo htmlspecialchars($mascota['refugio']); ?></p>
                <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($mascota['telefono']); ?></p>
                <p class="pet-description"><?php echo htmlspecialchars($mascota['descripcion']); ?></p>
                <a href= form.html class="adopt-btn">💜 Adoptar</a>
            </div>
        </div>
    </div>
<?php
} else {
    echo "<p>Mascota no encontrada.</p>";
}
?>

<script src="navbar2.js"></script>
</body>
</html>




