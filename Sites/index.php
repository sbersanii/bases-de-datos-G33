<?php session_start();
include('templates/header.html');
require("config/conexion.php");
?>
<body>
  <h1 align="center">Login y Registración</h1>

  <?php 
  if (!isset($_SESSION['rut'])) { ;?>
  <h5>Login</h5>
  <form method="post" action="login-action.php">
  <label>RUT:</label><br>
  <input type="text" name="rut" /><br>
  <label>Password:</label><br>
  <input type="password" name="password" /><br>
  <input type="submit" value="Login" />
  </form>
  Not a member yet? Click <a href="registration.php">here</a> to register.
  <?php } else if (isset($_SESSION['rut'])) { ;?>
  Usuario de rut: <?php echo $_SESSION['rut'] ?> <br>
  <a href="profile.php">Mi Perfil</a> <br>
  <a href="logout.php">Logout</a> <br>
  <br>
  <br>
  <br>
  <h3>Ver compras</h3>
    <form  action='compras.php' method='GET'>
        <input class='btn' type='submit' value='Consultar'>
    </form>
  <?php };
  ?>