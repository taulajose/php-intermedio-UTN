<!DOCTYPE html>
<html>
<head>
	<title>Curso PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilosLogin.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include("mostrar_contenido.php"); ?>
	<section id="principal">
		<h1>Ingreso de clientes</h1>
		<form id="formularioPrincipal" method="POST" action="validar.php">
			<span>DNI</span>
			<input class="inputText" type="number" name="dni">
			<span>Clave</span>
			<input class="inputText" type="text" name="clave">
			<?php
			session_start();
			$minus =array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
			$mayus =array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
			$signos = array("!","#","$","%","&","=");
			$_SESSION["codigos"] = rand(0,9).($minus[rand(0,26)]).rand(0,9).($mayus[rand(0,26)]).($signos[rand(0,5)]).rand(0,9);
			?>
			<img src="imagenCaptcha.php">
			<input class="inputText" name="confirmacion" type="text" id="confirmacion" placeholder="Ingrese los caracteres" />
			<input class="inputSubmit" type="submit" name="enviar" value="Enviar">
			<div class="errores">
					<?php
		if(isset($_GET['error'])){
			echo "<h3>Datos incorrectos</h3>";
		}
		if (isset($_GET['errorSesion'])){
			echo "<h3>Inicie Sesión</h3>";
		}
		
		?>
		</div>
		</form>	
	
	</section>
	<?php include("footer.php"); ?>
</body>
</html>
