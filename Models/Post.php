<?php

require '../Config/Conexion.php';

class Post{

    public function CheckInfoFromDB(){

        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_post";

        $post = $conexion->stm->prepare($sql);
        $post->execute();

        $postobj = $post->FetchAll(PDO::FETCH_OBJ);
        
        return $postobj;
    }

}





?>