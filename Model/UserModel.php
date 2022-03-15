<?php

class UserModel{

        private $db;
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_carrito;charset=utf8','root','');
        }

        function getUser($email){
            $query = $this->db->prepare('SELECT * FROM users WHERE email=?'); 
            $query ->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function registerModel($email,$password){
            $query = $this ->db->prepare('INSERT INTO users (email, password) VALUES (?,?)');
            $query->execute([$email, $password]);   
        }
        
        function getUsers(){
            $query = $this -> db-> prepare("SELECT * FROM users");
            $query -> execute();
            $users = $query->fetchAll(PDO::FETCH_OBJ);
            return $users;
        }

        function getUserById($id){
            $query = $this -> db-> prepare("SELECT * FROM users WHERE id=?");
            $query -> execute(array($id));
            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        }

        function updateUser($id,$rol){
            $query = $this->db->prepare("UPDATE users SET rol=? WHERE id=?");
            $query->execute(array($rol,$id));
        } 

        function getUserByRol($rol){
            $query =$this->db->prepare("SELECT id FROM users WHERE rol=?");
            $query->execute(array($rol));
            $users = $query->fetchAll(PDO::FETCH_OBJ);
            return $users;
        }

        function deleteUser($id){
            $query = $this -> db->prepare("DELETE FROM users WHERE id=?");
            $query->execute(array($id));
        }
}