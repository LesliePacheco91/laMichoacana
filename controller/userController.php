<?php 

class userControll{

    static public function inserUserController($name, $lasName, $email, $pass){

      if(strlen($pass) < 8){
        echo "la contraseña debe tener minimo 8 caracteres";
      }else{

        if(preg_match('/^[a-zA-Z0-9]+$/', $pass)){

            $inser = userModel::insertUserMdl($name, $lasName, $email, $pass);

            if($inser == true){
                echo "se ha registrado el usuario con exito";
            }else{
                echo "error de registro";
            }

        }else{
            echo "Solo se aceptan numero y letras";
        }

      }


    }

}

?>