<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="view/style/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="view/fonts/css/all.css">
	<title></title>
</head>
<body class = "body-contend">	
		<header class="head-home">
			<img src="img/Logo Small Hi.png" width="100%">
			<a class = "buttom-menu" href = "home.html"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
			<a class = "buttom-menu" href = "clientes.html"> <i class="fa fa-users-line" aria-hidden="true"></i> Clientes</a>
			<!--<a class = "buttom-menu" href = "home.html"> <i class="fa fa-tags" aria-hidden="true"></i> Ventas</a>-->
			<a class = "buttom-menu" href = "index.html"><i class="fa fa-power-off"></i> Salir</a>
		</header>
		<section class = "content-data">

			<div class ="head-data">
				<h1>Nuevo Producto</h1>
			</div>
			<div class = "body-data">

				<form class = "contet-new" method="POST" enctype = "multipart/form-data">
					<input type="text" class = "new-input" name = "nombre" placeholder="Nombre del producto">
					<input type="number" class = "new-input" name = "precio" placeholder="$ precio del producto">
					<input type="number" class = "new-input" name = "existencia" placeholder="existencia del producto">
					<input type="file" class ="new-input" name="img" placeholder="Imagen del producto">
					<input type="submit" class = "button-new-input" value="Gudardar" name = "guardarProducto">
				</form>

				<?php 
					if(isset($_POST['guardarProducto'])){

						$imgSize = $_FILES['img']['size'];
						$imgName = $_FILES['img']['name'];
						$imgTmp = $_FILES['img']['tmp_name'];


						$prod = productoController::inserProdController($_POST['nombre'], $_POST['precio'], $_POST['existencia'],$imgSize, $imgName, $imgTmp);

						

					}
				?>
			</div>
		</section>
</body>
</html>