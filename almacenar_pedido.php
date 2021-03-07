<?php
include("conexion_database.php");
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$color = $_POST['color'];
$imagen = $_POST['imagen'];
mysqli_query($conexion_db,"INSERT INTO productos VALUES(DEFAULT,'$producto','$marca','$color','$imagen',DEFAULT)");
header("location: realizar_pedidos.php?ok");
?>