<?php
session_start();
if(isset($_SESSION['clientes'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <?php include("mostrar_contenido.php"); ?>

    <div class="validarCargaProductos">
          
        <h2>Cargar Producto</h2>

       <form id="formPedidos" method="POST" action="cargar_pedido.php">
            <p>Marca</p>
            <input type="text" name="marca">
            <p>Modelo</p>
            <input type="text" name="modelo">
            <p>Color</p>
            <input type="tex" name="color">
            <p>Imagen</p>
            <input type="file" name="imagen">
            <input type="submit" name="Enviar" value="Enviar">
       </form>
       <?php
           if(isset($_GET['ok'])){
        echo "<h3>Pedido Cargado</h3>";
    } 
    if(isset($_GET['datosInvalidos'])){
        echo "<h3>Ingrese todos los campos</h3>";
    }
    ?>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>

<?php
}else{
    header("location:index.php?errorSesion");
}
?>