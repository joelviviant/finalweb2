<?php 

require_once 'Libs/Router.php';
require_once 'Controller/ApiController.php';


$router = new Router();

$router->addRoute('comments', 'GET', 'ApiController', 'getComments');  
$router->addRoute('comments/:ID', 'GET', 'ApiController', 'getComment');
$router->addRoute('comments', 'POST', 'ApiController', 'insertComment');   
$router->addRoute('comments/:ID', 'DELETE', 'ApiController', 'deleteComment');
$router->addRoute('comments/:ID/:SCORE', 'GET', 'ApiController', 'getCommentsByScore'); 


$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);