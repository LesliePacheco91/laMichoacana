<?php 

	class conexion{

		static public function conectar(){

			$con = new PDO("mysql:host=localhost;dbname=lamichoacana","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

			return $con;
		}

	}


?>