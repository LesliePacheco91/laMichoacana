<?php 

class plantillaController{

	static public function verPlantilla(){

		include "view/plantilla.php";
	}

	static public function tomarUrl(){

		if(isset($_GET['url'])){

			$url = $_GET['url'];
		}else{

			$url = "index";
		}

		$verPlantilla = PlantillaMdl::VerUrlMdl($url);

		include $verPlantilla;
	}
}

?>