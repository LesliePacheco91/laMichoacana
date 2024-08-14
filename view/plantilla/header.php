<?php 
    $menu = plantillaController::menuController($_SESSION['type']); 
?>

<header class="head-home">
    <img src="view/img/Logo Small Hi.png" width="100%">

    <?php foreach($menu as $m):?>
    <a class = "buttom-menu" href = "<?php echo $m['url']?>"> <i class="<?php echo $m['icono']?>" aria-hidden="true"></i><?php echo $m['nombre']?></a>
   <?php endforeach;?>
    <a class = "buttom-menu" href = "index.php?url=false"><i class="fa fa-power-off"></i> Salir</a>
</header>