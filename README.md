# Conectar una Base de Datos MySQL con PHP utilizando PDO

En este tutorial, aprenderemos cómo conectar una base de datos MySQL con PHP utilizando PDO en un servidor local.

## Código de la conexion

```php
<?php 

	class conexion{

		static public function conectar(){

			$con = new PDO("mysql:host=localhost;dbname=lamichoacana","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

			return $con;
		}

	}


?>



