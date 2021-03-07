<?php
include("conexion_database.php");
$prod = $_GET['producto'];
mysqli_query($conexion_db,"DELETE FROM productos where ID='$prod'");
header("location: finalizar_pedido.php");

?>