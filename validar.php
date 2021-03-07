<?php 
include("conexion_database.php");
session_start();
$dni = $_POST['dni'];
$clave = $_POST['clave'];
$confirmacion = $_POST['confirmacion'];

if($dni && $clave){
	$consulta = mysqli_query($conexion_db,"SELECT * FROM usuarios where usuario=$dni AND clave = '$clave'");
	if (mysqli_num_rows($consulta)!=0 && $confirmacion == $_SESSION["codigos"]){
		$_SESSION['clientes']=$dni;
		header("location:realizar_pedidos.php");
	} else {
		header('location:index.php?error');
	}
}

?>