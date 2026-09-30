<?php
include("connection.php");
session_start();
$msg = '';
if(isset($_POST['register'])){

$nombre = $_POST ['nombre'];
$correo = $_POST ['correo'];
$contraseña = $_POST ['contraseña'];

$insert1 = "SELECT * FROM registro WHERE nombre = '$nombre' AND contraseña = '$contraseña' ";
$select_user = mysqli_query($conn, $insert1);
if (mysqli_num_rows($select_user) > 0){
    $msg = "Usuario ya existente";
} else { 
    $insert1 = "INSERT INTO registro (nombre, correo, contraseña) VALUES ('$nombre','$correo','$contraseña')";
    mysqli_query($conn, $insert1);
    header('location:inicio.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="navbar.css">
    <title>Registro</title>
</head>
<body>
 
  <!-- Logo y nombre -->
<div style="text-align: center; padding: 20px; background-color: white;">
  <img src="imagenes/logo.png" alt="Logo FurryFriends" style="height: 50px; vertical-align: middle; margin-right: 10px;">
  <span style="font-size: 32px; color: #444; font-weight: 600;">
     Furrylove✨🐾
  </span>
</div>
 
<!-- Navbar principal -->
<nav>
  <div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="perrosGatos.html">Adopta Ya</a>
    <a href="nosotros.html">Sobre Nosotros</a>
    <a href="furryshop.php">FurryShop</a>
    <a href="refugios.php">Refugios</a>
    <a href="registro.php">Registro/Iniciar sesión</a>
  </div>
 
  <!-- Botón hamburguesa visible solo en móvil -->
  <div class="hamburger" id="hamburger">☰</div>
</nav>
 
<!-- Sidebar lateral -->
<div class="side-menu" id="sideMenu">
  <!-- Botón cerrar -->
  <a href="javascript:void(0)" class="close-btn" id="closeBtn">&times;</a>
 
  <!-- Opciones -->
  <div class="menu-links">
    <a href="index.php">Inicio</a>
    <a href="perrosGatos.html">Adopta Ya</a>
    <a href="nosotros.html">Sobre Nosotros</a>
    <a href="furryshop.php">FurryShop</a>
    <a href="refugios.php">Refugios</a>
    <a href="registro.php">Registro/Iniciar sesión</a>
  </div>
</div>
 
<div class="container">
    <form action="" class="form" name="registro" method="post">
      <h2>Registrase</h2>
        <input type="email" name="correo" class="box" placeholder="Ingresa tu correo">
        <input type="text" name="nombre" class="box" placeholder="Ingresa tu nombre">
        <input type="password" name="contraseña" class="box" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Registrarse" id="submit" name="register">
        <a href="inicio.php">¿Ya tienes una cuenta?</a>
    </form>
    <div class="side">
      <img src="imagenes/Img.2.png" alt="">
    </div>
 
   <script src="navbar.js"></script>
 
</div>
 
</body>
</html>