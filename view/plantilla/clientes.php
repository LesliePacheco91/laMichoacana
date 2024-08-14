<?php 
	$verClientes = userControll::verClientesController();
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
				<h1>Lista de clientes</h1>
				<h3>Bienvenido <?php echo $_SESSION['usuario']; ?></h3>
			</div>
			<div class = "body-data">
				
				<table class = "data-table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Email</th>
							<th>Contraseña</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach($verClientes as $client){
							echo "<tr>
									<td>".$client['nombre']."</td>
									<td>".$client['apellidos']."</td>
									<td>".$client['email']."</td>
									<td>".$client['contrasenia']."</td>
								</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
			
		</section>
</body>
</html>