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
				<h1>Mi carrito</h1>
				<h3>Bienvenido <?php echo $_SESSION['usuario']; ?></h3>
			</div>
			<div class = "body-data">
				
				<table class = "data-table-shop">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Cantidad</th>
							<th>Presio</th>
							<th>subtotal</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Nieve de Fresa</td>
							<td>2</td>
							<td>$12.75</td>
							<td>$25.5</td>
						</tr>
						<tr>
							<td>Nieve de Fresa</td>
							<td>2</td>
							<td>$12.75</td>
							<td>$25.5</td>
						</tr>
						<tr>
							<td>Nieve de Fresa</td>
							<td>2</td>
							<td>$12.75</td>
							<td>$25.5</td>
						</tr>
					</tbody>
					<tfoot>
						<td colspan="3" class = "total">Total</td>
						<td class = "info-total">$150</td>
					</tfoot>
				</table>
				<input type="submit" name = "" class ="buttom-shop" value = "finalizar compra">
			</div>
			
		</section>
</body>
</html>