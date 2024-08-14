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

    static public function EliminarProductoMdl($id){

        $data = conexion::conectar()->prepare("DELETE FROM producto WHERE idproducto = :id ");
        $data->bindParam(':id',$id, PDO::PARAM_INT);

        if($data->execute()){
            return true;
        }else{
            return false;
        }

    }

    static public function filtroProdMdl($id){

        $data = conexion::conectar()->prepare("SELECT * FROM producto WHERE idproducto = :id ");

        $data ->bindParam(':id',$id, PDO::PARAM_INT);
        
        $data->execute();
        return $data->fetch();
    }

    static public function updateProdImgMdl($id, $nom, $pre,$stok, $nameImg){

        $data = conexion::conectar()->prepare(" UPDATE producto SET nombre =:nom, precio=:pre, existencia =:stok, imagen = :img WHERE idproducto = :id ");

        $data ->bindParam(':id',$id, PDO::PARAM_INT);
        $data ->bindParam(':nom',$nom, PDO::PARAM_STR);
        $data ->bindParam(':pre',$pre, PDO::PARAM_STR);
        $data ->bindParam(':stok',$stok, PDO::PARAM_INT);
        $data ->bindParam(':img',$nameImg, PDO::PARAM_STR);
        
        if($data->execute()){
            return true;
        }else{
            return false;
        }
        
    }

    static public function updateProdMdl($id,$nom, $pre,$stok){

        $data = conexion::conectar()->prepare(" UPDATE producto SET nombre =:nom, precio=:pre, existencia =:stok  WHERE idproducto = :id ");

        $data ->bindParam(':id',$id, PDO::PARAM_INT);
        $data ->bindParam(':nom',$nom, PDO::PARAM_STR);
        $data ->bindParam(':pre',$pre, PDO::PARAM_STR);
        $data ->bindParam(':stok',$stok, PDO::PARAM_INT);
        
        if($data->execute()){
            return true;
        }else{
            return false;
        }

    }
}


?>