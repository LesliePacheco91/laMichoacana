<?php 

class productoController{

    static public function inserProdController($name, $price, $stok, $imgSize, $imgName, $imgTmp){

       if(strlen($imgName) >= 45){
            echo "El nombre de la imagen es demaciado largo";
       }else{

        if($imgSize > 600000){
            echo "el peso de la imagen supera a lo aceptado";
        }else{

            $prod = productoMdl::inserProdMdl($name, $price, $stok, $imgName);

            if($prod == true){

                $uploadDir ="view/products/";

                $uploadFile = $uploadDir.$imgName;

                if(move_uploaded_file($imgTmp, $uploadFile)){

                    echo "Se ha subido la imagen de manera correcta";
                }else{
                    echo "error";
                }
            }else{
                echo "error de registro";
            }

        }

       }
        
    }
}

?>