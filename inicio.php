<?php
include("connection.php");
session_start();
$msg = '';
if(isset($_POST['inicio'])){
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $select1 = "SELECT * FROM `registro` WHERE correo = '$correo' AND contraseña = '$contraseña'";
    $select_user = mysqli_query($conn, $select1);
    if(mysqli_num_rows($select_user) > 0 ){
        $row1 = mysqli_fetch_assoc($select_user);
            $_SESSION['nombre'] = $row1['nombre'];
            $_SESSION['id'] = $row1 ['id'];
            header('location:User/homepage.php');
            exit();
        } else{
            $msg = "Usuario o contraseña incorrectos";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iniciar.css">
    <link rel="stylesheet" href="navbar.css">
    <title>Registro</title>
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
    <form action="" class="form" name="inicio" method="post">
      <h2>Iniciar sesión</h2>
        <input type="email" name="correo" class="box" placeholder="Ingresa tu correo">
        <input type="password" name="contraseña" class="box" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Iniciar sesión" id="submit" name="inicio">
        <a href="">¿Olvidaste tu contraseña?</a>
        <a href="registro.php">¿Aún no tienes una cuenta?</a>
    </form>
    <div class="side">
      <img src="imagenes/Img.2.png" alt="">
    </div>
</div>
 
<script src="navbar.js"></script>
</body>
</html>