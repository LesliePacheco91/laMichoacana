<?php 

	$verProd = productoController::verProductosController();

	if(isset($_GET['id'])){
		$eliminarProd = productoController::eliminarProductoController($_GET['id']);
	}
?>

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
			<img src="view/img/Logo Small Hi.png" width="100%">
			<a class = "buttom-menu" href = "home"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
			<a class = "buttom-menu" href = "clientes"> <i class="fa fa-users-line" aria-hidden="true"></i> Clientes</a>
			<a class = "buttom-menu" href = "carrito"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito</a>
			<a class = "buttom-menu" href = "index"><i class="fa fa-power-off"></i> Salir</a>
		</header>
		<section class = "content-data">

			<div class ="head-data">
				<h1>Productos</h1>
				<div class = "shopping-cart">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i><h1 id ="total-shop"></h1>
				</div>

				<a href = "nuevoProducto" class="buttom-data"> <i class = "fa fa-upload"></i> Nuevo Producto</a>
			</div>
			<div class = "body-data">
				<ul class = "content-card">	
					<?php foreach($verProd as $item): ?>				
					<li class = "card">
						<img src = "view/products/<?php echo $item['imagen'];  ?>" class = "img-data">
						<h5><?php echo $item['nombre'];?></h5>
						<h1><?php echo $item['precio'];?></h1>
						<p icons>

							<a href="index.php?url=home&id=<?php echo $item['idproducto'];?>" class ="icon-card"><i class="fa fa-trash" aria-hidden="true"></i></a>
							<a href="modifica_producto.html" class = "icon-card"><i class="fa fa-file-edit" aria-hidden="true"></i></a>
							<button class ="icon-card" id="icon-shop" onclick="adCard(1);" data-id = "1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>

						</p>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			
		</section>
</body>
</html>