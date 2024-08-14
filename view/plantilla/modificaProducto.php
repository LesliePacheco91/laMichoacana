<?php 

	$verProd = productoController::filtroProdControll($_GET['id']);


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
			<h1>Modificar Producto</h1>
			<h3>Bienvenido <?php echo $_SESSION['usuario']; ?></h3>
		</div>
		<div class = "body-data">
			<form class = "contet-new" method="POST" enctype="multipart/form-data">
				<input type="hidden" name = "idprod" value="<?php echo $_GET['id']?>">
				<input type="hidden" name = "imgOld"  value = "<?php  echo $verProd['imagen'];?>">
				<input type="text" class = "new-input" name = "nom" placeholder="Nombre del producto" value = "<?php echo $verProd['nombre'];?>">
				<input type="number" class = "new-input" name = "pre" placeholder="$ precio del producto" value = "<?php echo $verProd['precio'];?>">
				<input type="number" class = "new-input" name = "stok" placeholder="Stok del producto" value = "<?php echo $verProd['existencia'];?>">
				<input type="file" class = "new-input" name = "img" placeholder="Imagen del producto">
				
				<input type="submit" class = "button-new-input" value="Gudardar" name = "actualizar" placeholder="Imagen del producto">
			</form>
		</div>
		<?php 
		if(isset($_POST['actualizar'])){


				if($_FILES['img']['name'] != null || $_FILES['img']['name'] != ''){

					$name = $_FILES['img']['name'];
					$size = $_FILES['img']['size'];
					$path = $_FILES['img']['tmp_name'];

					$data = productoController::actualizarProdImgController($_POST['idprod'], $_POST['imgOld'], $_POST['nom'], $_POST['pre'],$_POST['stok'], $name, $size, $path);

				}else{

					$data = productoController::actualizarProdController($_POST['idprod'], $_POST['nom'], $_POST['pre'],$_POST['stok']);
				}
	
		}
		?>
		
	</section>
</body>
</html>