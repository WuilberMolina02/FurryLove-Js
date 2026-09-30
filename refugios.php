<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Refugios</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="refugios.css">
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

<!-- HERO -->
<section class="container-fluid hero-section">
  <div class="row align-items-center flex-nowrap">
    <div class="col-md-6 px-2 text-start d-flex flex-column justify-content-center hero-texto">
      <h1 class="hero-titulo">Conoce sobre los refugios</h1>
    </div>
    <div class="col-md-6 text-center">
      <img src="imagenes/gato-e-cachorro-juntos-olhando-para-a-camera-isolada-em-branco_191971-28715-removebg-preview.png" class="img-fluid hero-img" alt="Perro y gato" />
    </div>
  </div>
</section>

<!-- LISTA DE REFUGIOS -->
<div class="container mt-5">
  <div class="row g-4">
    <?php
      include_once "refugios2.php";
      $conexion = new mysqli($db_host, $db_user, $db_pass, $db_database);
      if($conexion != true){
        die("Error de conexión");
      }
      $sql = "SELECT `nombre`, `descripcion`, `ubicacion`, `contactos`, `redes_sociales`, `image` FROM `refugios`";
      $resultSet = mysqli_query($conexion,$sql);
      while($row = mysqli_fetch_row($resultSet)){
    ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="imagenes/<?php echo $row[5]; ?>" class="card-img-top" alt=".">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row[0]; ?></h5>
            <p class="card-text"><strong>Descripción:</strong> <?php echo $row[1]; ?></p>
            <p class="card-text"><strong>Ubicación:</strong> <?php echo $row[2]; ?></p>
            <p class="card-text"><strong>Contactos:</strong> <?php echo $row[3]; ?></p>
            <p class="card-text"><strong>Redes sociales:</strong> <?php echo $row[4]; ?></p>
          </div>
        </div>
      </div>
    <?php 
      }
    ?>
  </div>
</div>

<script src="navbar.js"></script>
</body>
</html>
