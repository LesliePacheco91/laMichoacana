<?php 

class plantillaController{

	static public function verPlantilla(){

		include "view/plantilla.php";
	}

	static public function tomarUrl($url){

		if(isset($url)){

			$ur = $url;
		}else{

			$ur = "index";
		}

		$verPlantilla = PlantillaMdl::VerUrlMdl($ur);

		include $verPlantilla;
	}

	static public function menuController($tipo){

		$menu = PlantillaMdl::menuModel($tipo);
		return $menu;
	}
}

?>