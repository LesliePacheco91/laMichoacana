<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="view/style/style.css">
	<title></title>
</head>
<body class = "body-login">
		<h1 class = "title-login">Registro</h1>
		<section class = "secction-login">
			<img src="view/img/Logo Small Hi.png" class="img-login">
			<form method = "POST" action="">
				<input type= "text" name = "nombre" class = "data-input" placeholder="Ingresa tu nombre" require>
				<input type= "text" name = "Apellidos"class = "data-input" placeholder="Ingresa tus apellidos">
				<input type= "text" name = "Email"class = "data-input" placeholder="Ingresa tu e-mail">
				<input type = "password"  name = "pass" class = "data-input" placeholder="Contraseña">
				<input type ="submit" class = "data-button" name = "registro" value="Registrar">
			</form>
		</section>
		<?php 

			if(isset($_POST['registro'])){

				$insert = userControll::inserUserController($_POST['nombre'], $_POST['Apellidos'], $_POST['Email'], $_POST['pass']);
			}
		?>
</body>
</html>