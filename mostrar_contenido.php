<?php
if(isset($_SESSION['clientes'])){
?>
	<header>
		<a href="realizar_pedidos.php">Realizar pedido</a>
		<a href="ver_pedidos.php">Ver mis pedidos</a>
		<a href="finalizar_pedido.php">Finalizar pedidos</a>
		<a class="cerrarSesion" href="salir.php">Cerrar Sesion</a>
	</header>
<?php
}else{
?>
	<header>
		<a href="realizar_pedidos.php">Realizar pedido</a>
		<a href="ver_pedidos.php">Ver mis pedidos</a>
		<a href="finalizar_pedido.php">Finalizar pedidos</a>
	</header>
<?php
}
?>
	


