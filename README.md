# Conectar una Base de Datos MySQL con PHP utilizando PDO

En esta rama, contiene el codigo para conectar una base de datos MySQL con PHP utilizando PDO en un servidor local.
se adjunta el video de la explicación 


Reemplaza `TU_ID_DEL_VIDEO` con el ID del video de YouTube que deseas adjuntar. Por ejemplo, si la URL del video es `https://www.youtube.com/watch?v=dQw4w9WgXcQ`, el ID del video es `dQw4w9WgXcQ`.

Este código mostrará una miniatura del video y, al hacer clic en ella, abrirá el video de YouTube en una nueva pestaña.


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



