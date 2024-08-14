<?php 

require_once "conexion.php";

class PlantillaMdl extends conexion {

	static public function VerUrlMdl($url){


		if("registro" == $url || 
			"carrito" == $url || 
			"clientes" == $url ||
			"home" == $url ||
			"modificaProducto" == $url ||	
			"nuevoProducto" == $url){

			$modulo = "view/plantilla/".$url.".php";

		}else{
			$modulo = "view/plantilla/index.php";
		}
		return $modulo;
	}

	static public function menuModel($tipoUser){

		$data = conexion::conectar()->prepare("SELECT * from modulos inner JOIN modulo_detalle on modulos.id = modulo_detalle.idmodule WHERE permiso = :permiso ");

		$data ->bindParam(':permiso',$tipoUser, PDO::PARAM_INT);
        $data ->execute();
        return $data->fetchAll();

	}

}

?>