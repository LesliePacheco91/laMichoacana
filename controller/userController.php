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

    static public function loginController($user, $pass){

      

      if(preg_match('/^[a-zA-Z0-9]+$/', $pass)){

        $newLog = userModel::oginController($user, $pass);

        if($newLog != false || $newLog != null){
          
          $_SESSION['VALIDA'] = true;
          $_SESSION['id'] = $newLog['idusuario'];
          $_SESSION['type'] = $newLog['tipo'];

          $_SESSION['usuario'] = $newLog['nombre'].' '.$newLog['apellidos'];

          header("location:home");


        }else{
          echo "usuario y/o contraseña incorrectos";
        }

      }else{
        echo "no se permiten caracteres especiales en este campo";
      }

    }

    static public function verClientesController(){
      
      $verCLientes = userModel::verClientesController();
      return $verCLientes;
    }

}

?>