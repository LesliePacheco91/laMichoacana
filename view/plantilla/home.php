<?php 

	$verProd = productoController::verProductosController();

	if(isset($_GET['id'])){


		$eliminarProd = productoController::eliminarProductoController($_GET['id'], $_GET['img']);
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
	<title>La michoacana</title>
</head>
<body class = "body-contend">	
		<?php 
			include ("header.php");
		?>
		<section class = "content-data">

			<div class ="head-data">
				<h1>Productos</h1>

				<?php if($_SESSION['type'] == 2){?>
				<div class = "shopping-cart">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i><h1 id ="total-shop"></h1>
				</div>

				<?php } else if($_SESSION['type'] == 1){ ?>
				<a href = "nuevoProducto" class="buttom-data"> <i class = "fa fa-upload"></i> Nuevo Producto</a>
				<?php }?>
				<h3>Bienvenido <?php echo $_SESSION['usuario']; ?></h3>
			</div>
			<div class = "body-data">
				<ul class = "content-card">	
					<?php foreach($verProd as $item): ?>				
					<li class = "card">
						<img src = "view/products/<?php echo $item['imagen'];  ?>" class = "img-data">
						<h4><?php echo $item['nombre'];?></h4>
						<em>Existencias: <?php echo $item['existencia'];?></em>
						<h1>$<?php echo $item['precio'];?></h1>
						<p icons>

						<?php if($_SESSION['type'] == 1){?>

							<a  class = "icon-card" href = "index.php?url=home&id=<?php echo $item['idproducto'];?>&img=<?php echo $item['imagen']; ?>">
							<i class="fa fa-trash" aria-hidden="true"></i>
							</a>
			
							<a href="index.php?url=modificaProducto&id=<?php echo $item['idproducto']?>" class = "icon-card">
								<i class="fa fa-file-edit" aria-hidden="true"></i>
							</a>
						<?php }else if($_SESSION['type'] == 2){?>
							
							<button class ="icon-card" id="icon-shop" data-id = "1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button
						<?php }?>
						</p>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			
		</section>
</body>
</html>