<?php

require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";
require_once "./View/ProductView.php";
require_once "./Helpers/AuthHelper.php";



class LoginController {

    private $model;
    private $view;
    private $authHelper;
    private $productView;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
        $this->productView = new ProductView();
    }  
  
    function login(){
        $this->view->showLogin();
    }
    
    function logout(){
        $this->authHelper->logout();
        $this->view->showLogin();
    }

    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getUser($email);
           
          if ($user && password_verify($password, $user->password)) {

                $this->authHelper->checkLoggedIn();
                $_SESSION['email'] = $email;   
                $_SESSION['id'] = $user->id;
                $_SESSION['rol'] = $user->rol;
                $this->view->showHome(); 
        } else {
                 $this->view->showLogin("Acceso denegado. Usuario o contraseña invalidos");
            }
        }
    }

    function register(){
        $this->view->showRegister();
    }

    
    function registerUser($email, $password){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $userCreate=$this->model->registerModel($email, $password);
            if (!isset ($userCreate)){
                session_start();
                $_SESSION['email'] = $email; 
                $_SESSION['id'] = $userCreate->id;
                $_SESSION['rol'] = $userCreate->rol;
                $this->verifyLogin();
                $this->view->showHome(); 

            }else {
                $this->view->showLogin();
            }
        }
        $this->view->showHome();
    }
    
    function showUsers(){
        $this->authHelper->checkLoggedIn();
        if ($_SESSION['rol'] ==0){
            $users=$this->model->getUsers();
            $this->view->showUsers($users);
        }else {
            $this->productView->showErrorLocation();
        }
        
    }

    function updateUser($id){
        $this->authHelper->checkLoggedIn();
         $user=$this->model->getUserById($id);
         if($user->rol==1){
                 $user->rol=0;
                 $this->model->updateUser($id,$user->rol);
                 $this->view->showUsersLocation();
             }else{
                 $user->rol=1;
                 $this->model->updateUser($id,$user->rol);
                 $this->view->showUsersLocation();
        } 
    }

    function deleteUser($id){
        $this->authHelper->checkLoggedIn();
        $rol=$this->authHelper->getRol();
        $user=$this->model->getUserById($id);
        if($user->rol!=1){
            $users=$this->model->getUserByRol($rol);
            $cantUser=count($users);
            if($cantUser!=0){
               $this->model->deleteUser($id);
               $this->view->showUsersLocation();
            }else{
               $this->view->showUsersLocation();
            }
        }else{
             $this->model->deleteUser($id);
             $this->view->showUsersLocation();
        }  
    }
}