<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');
?>

<?php
$producto = $_POST['Producto'];
$lista = explode(":", $tienda);
?>
<h3 align="center"> Producto: <?php echo $lista[1]; ?> con id: <?php echo $lista[0];?> </h3>
