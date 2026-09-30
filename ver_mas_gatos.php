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

<script src="navbar.js"></script>
</body>
</html>




