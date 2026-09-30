<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Refugios</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="refugios.css">
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


  <!-- HERO -->
  <section class="container-fluid hero-section ">
    <div class="row align-items-center flex-nowrap">
      <div class="col-md-6 px-2 text-start d-flex flex-column justify-content-center hero-texto">
  <h1 class="hero-titulo">Conoce sobre los refugios</h1>

  
</div>

      <div class="col-md-6 text-center">
        <img src="imagenes/gato-e-cachorro-juntos-olhando-para-a-camera-isolada-em-branco_191971-28715-removebg-preview.png" class="img-fluid hero-img" alt="Perro y gato" />
      </div>
    </div>
  </section>

  <div class="container mt-5">
    <div class="row g-4">
      <?php
        include_once "refugios2.php";
        $conexion = new mysqli($db_host, $db_user, $db_pass, $db_database);
        if($conexion!=true){
          die("Error de conexión ");
        }
        $sql = "SELECT `nombre`, `descripcion`, `ubicacion`, `contactos`, `redes_sociales`, `image` FROM `refugios` ";
        $resultSet = mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_row($resultSet)){
          ?>
          <div class= "col-sm-6 col-md-4 col-lg-3">
          <div class="card h-100 shadow-sm">
            <img src="imagenes/<?php echo $row[5]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-title"><?php echo $row[0]; ?></h5>
           <p class="card-text"> <strong>Decripción:</strong> <?php echo $row[1]; ?></p>
           <p class="card-text"> <strong>Ubicación:</strong> <?php echo $row[2]; ?></p>
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

  <script src="navbar2.js"></script>
</body>
</html>