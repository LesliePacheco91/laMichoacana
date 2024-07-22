<?php 

class PlantillaMdl{

	static public function VerUrlMdl($url){


		if("registro" == $url || 
			"carrito" == $url || 
			"clientes" == $url ||
			"home" == $url ||
			"modifica_producto" == $url ||	
			"nuevoProducto" == $url){

			$modulo = "view/plantilla/".$url.".php";

		}else{
			$modulo = "view/plantilla/index.php";
		}

		return $modulo;


	}

}

?>