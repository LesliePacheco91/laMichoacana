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
}

?>