<?php


class ApiModel{


    private $db; 
    
    
    function __construct(){
       $this-> db = new PDO ('mysql:host=localhost;'.'dbname=db_carrito;charset=utf8', 'root', '');

    }

    function getComment($id){
        $query = $this -> db-> prepare("SELECT * FROM comments WHERE id=?");
        $query -> execute(array($id));
        $comment = $query->fetchAll(PDO::FETCH_OBJ);
        return $comment; 
    }

    function getComments(){
        $query = $this -> db-> prepare("SELECT * FROM comments");
        $query -> execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
    
    
    function getCommentByProduct($id_producto){
        $query = $this -> db-> prepare("SELECT * FROM comments WHERE id_producto =?");
        $query -> execute(array($id_producto));
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments; 
    }

   function getCommentByCategory($id){
    $query = $this -> db-> prepare("SELECT * FROM commentscategory WHERE id_categoria =?");
    $query -> execute(array($id));
    $comments = $query->fetchAll(PDO::FETCH_OBJ);
    return $comments; 
   }

   function getCommentCategory($id){
    $query = $this -> db-> prepare("SELECT * FROM commentscategory WHERE id=?");
    $query -> execute(array($id));
    $comment = $query->fetchAll(PDO::FETCH_OBJ);
    return $comment; 
}



    function getCommentsByScore($id_producto, $score){
        $query = $this->db->prepare("SELECT * FROM comments WHERE id_producto=? AND score=?");
        $query->execute(array($id_producto,$score));           
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    function delete($id){
        $query = $this -> db->prepare("DELETE FROM comments WHERE id=?");
        $query->execute(array($id));
    }

    function deleteCommentCategories($id){
        $query = $this -> db->prepare("DELETE FROM commentscategory WHERE id=?");
        $query->execute(array($id));
    }

    function insert($comment,$score,$id_user,$id_product){
        $query = $this -> db -> prepare("INSERT INTO comments (comentario, score,id_user,id_producto) VALUES(?,?,?,?)");
        $query -> execute(array($comment,$score,$id_user,$id_product));
    }

    function insertCommentCategory($comment,$score,$id_user,$id_categoria){
        $query = $this -> db -> prepare("INSERT INTO commentscategory (comentario, score,id_user,id_categoria) VALUES(?,?,?,?)");
        $query -> execute(array($comment,$score,$id_user,$id_categoria));
    }
}