<?php

require_once "./Libs/smarty/libs/Smarty.class.php";

class LoginView{

    private $smarty;

    function __construct(){
        
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo','Log In');
        $this->smarty->assign('error',$error);
        $this->smarty->display('Templates\login.tpl');
    }

    function showHome(){
        header("Location:".BASE_URL. "carrito"); 
    }
    function showUsersLocation(){
        header("Location: ".BASE_URL."showUsers");
    }

    function showRegister(){
        $this->smarty->assign('titulo','Registro');
        $this->smarty->display('Templates\register.tpl');
    }

    function showUsers($users,$error=""){
        $this->smarty->assign('titulo','Usuarios');
        $this->smarty->assign('users',$users);
        $this->smarty->assign('error',$error);
        $this->smarty->display('Templates/users.tpl');      
    }
  
}
