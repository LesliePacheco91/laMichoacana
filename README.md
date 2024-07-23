# Conectar una Base de Datos MySQL con PHP utilizando PDO

En esta rama, contiene el codigo para conectar una base de datos MySQL con PHP utilizando PDO en un servidor local.
se adjunta el video de la explicación  [ver video ](https://youtu.be/eX8R5HG8slU)


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



