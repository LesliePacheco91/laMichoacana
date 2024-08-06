<?php

require_once "conexion.php";

class productoMdl extends conexion{

    static public function inserProdMdl($name, $price, $stok, $img){

        $std = conexion::conectar()->prepare("INSERT INTO producto values(null, :nam, :price, :stk, :img)");

        $std->bindParam(":nam", $name, PDO::PARAM_STR);
        $std->bindParam(":price", $price, PDO::PARAM_STR);
        $std->bindParam(":stk", $stok, PDO::PARAM_INT);
        $std->bindParam(":img", $img, PDO::PARAM_STR);

        if($std->execute()){
            return true;
        }else{
            return false;
        }

    }

    static public function verProductosMdl(){

        $data = conexion::conectar()->prepare("SELECT * FROM producto ORDER BY nombre ASC ");
        $data ->execute();
        return $data->fetchAll();

    }
}


?>