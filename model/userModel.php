<?php 

require_once "conexion.php";
class userModel extends conexion{

    static public function insertUserMdl($name, $lastName, $email, $password){

        $data = conexion::conectar()->prepare("INSERT INTO usuarios value (null, :name, :lastNa, :email, :pass)");

        $data->bindParam(":name", $name, PDO::PARAM_STR);
        $data->bindParam(":lastNa", $lastName, PDO::PARAM_STR);
        $data->bindParam(":email", $email, PDO::PARAM_STR);
        $data->bindParam(":pass", $password, PDO::PARAM_STR);

        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }

    static public function oginController($user, $pass){

        $data = conexion::conectar()->prepare("SELECT * FROM usuarios WHERE email = :us and contrasenia = :pas");

        $data->bindParam(":us", $user, PDO::PARAM_STR);
        $data->bindParam(":pas", $pass, PDO::PARAM_STR);

        $data->execute();
        return $data->fetch();
    
    }

    static public function verClientesController(){

        $data = conexion::conectar()->prepare("SELECT * FROM usuarios WHERE tipo = 2");

        $data->execute();
        return $data->fetchAll();

    }
}

?>