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

                    echo "Se há registrado el producto";
                }else{
                    echo "error";
                }
            }else{
                echo "error de registro";
            }

        }

       }
        
    }

    static public function verProductosController(){
     
        $verProd = productoMdl::verProductosMdl();

        return  $verProd;
    }

    static public function eliminarProductoController($id, $img){

        $eliminarProd = productoMdl::EliminarProductoMdl($id);
        $filePath = "view/products/".$img;

        if($eliminarProd == true){
          
            unlink($filePath);
            header('Location:home');
        }
    }

    static public function filtroProdControll($id){
         
        if(isset($id)){

            $verDato = productoMdl::filtroProdMdl($id);
            return $verDato;
        }
    }

    static public function actualizarProdImgController($id, $imgOld, $nom, $pre, $stok, $nameImg, $size, $path){

    if(strlen($nameImg) >= 45){
            echo "El nombre de la imagen es demaciado largo";
       }else{

        // verifica que el peso de la imagen no sea mayor a 600 mb
        if($size > 600000){
            echo "el peso de la imagen supera a lo aceptado";
        }else{

            $updateProd = productoMdl::updateProdImgMdl($id,$nom, $pre,$stok, $nameImg);

            if($updateProd == true){

                // eliminar la imagen anterior 
                $filePath = "view/products/".$imgOld;
                unlink($filePath);


                // subor la nueva imagen
                $uploadDir ="view/products/";
                $uploadFile = $uploadDir.$nameImg;
                if(move_uploaded_file($path, $uploadFile)){

                    header('Location:home');
                }else{
                    echo "error";
                }
            }else{
                echo "error de actualización";
            }

        }

       }

    }

    static public function actualizarProdController($id, $nom, $pre,$stok){

        $updateProd = productoMdl::updateProdMdl($id,$nom, $pre,$stok);

        if($updateProd == true){

            header('Location:home');
        }else{
            echo "error de actualización";
        }
    }
}

?>