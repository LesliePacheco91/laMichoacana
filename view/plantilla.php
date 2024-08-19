<?php 
session_start();
if(empty($_SESSION['VALIDA'])){

	if(isset($_GET['url'])){
		if($_GET['url'] == 'index' || $_GET['url'] == 'registro'){
			plantillaController::tomarUrl($_GET['url']);
		}else{
			plantillaController::tomarUrl(null);
		}
	}else{
		plantillaController::tomarUrl(null);
	}
	
}else{

	if($_GET['url']=='false'){

        session_destroy();
        header("Location:index");
    }else{
		$dir = $_GET['url'];
		if($dir == 'index'){
			plantillaController::tomarUrl('home');
		}else{
			plantillaController::tomarUrl($dir);
		}
	}

	
}

	//plantillaController::tomarUrl();
?>
