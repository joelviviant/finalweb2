<?php

require_once "./Model/ProductModel.php";
require_once "./Model/ApiModel.php";
require_once './View/ApiView.php';
require_once './Helpers/AuthHelper.php';


class ApiController{


  private $model;
  private $apiModel;
  private $view;
  private $authHelper;

  public function __construct(){
    $this->model = new ProductModel();
    $this->view = new ApiView();
    $this->apiModel = new ApiModel();
    $this->authHelper = new authHelper();
  }
  
  function getComment($params = null){
    $id_producto = $params[":ID"];
    $comments = $this->apiModel->getCommentByProduct($id_producto);
    if ($comments){
      return $this->view->response($comments, 200);
    } else{
      return $this->view->response(null, 404);
    }
  }
 
  
  function getCommentsCategories($params = null){
    $id_categoria = $params[":ID"];
    $comments = $this->apiModel->getCommentByCategory($id_categoria);
    if ($comments){
      return $this->view->response($comments, 200);
    } else{
      return $this->view->response(null, 404);
    }
  }


  function getComments($params = null){
    $comments = $this->apiModel->getComments();
    return $this->view->response($comments, 200);
  }

  function deleteComment($params = null){
    if ( ($_SESSION['rol'] == 0)){
      $id = $params[":ID"];
      $comment = $this->apiModel->getComment($id);
      if (!empty($comment) && isset($comment)) {
        $this->apiModel->delete($id);
        return $this->view->response("El comentario $id fue eliminado", 200);
      } else {
        return $this->view->response("El comentario $id no existe", 404);
    }
  }else{
    $this->view->response("No tienes permisos para realizar esta acción", 401);
    }
  } 

  function deleteCommentCategories($params = null){
    if (($_SESSION['rol'] == 0)){
      $id = $params[":ID"];
      $comment = $this->apiModel->getCommentCategory($id);
      if (!empty($comment) && isset($comment)) {
        $this->apiModel->deleteCommentCategories($id);
        return $this->view->response("El comentario $id fue eliminado", 200);
      } else {
        return $this->view->response("El comentario $id no existe", 404);
    }
  }else{
    $this->view->response("No tienes permisos para realizar esta acción", 401);
    }
  }

  function insertComment($params = null){
    $body = $this->getBody();
    if (isset($body->comment) && isset($body->score) && isset($body->id_user) && isset($body->id_product))
      {
      $id = $this->apiModel->insert($body->comment, $body->score, $body->id_user, $body->id_product);
      if ($id != 1) {
        $this->view->response("El comentario de id=$id fue creado con exito", 200);
      } else{
        $this->view->response("El comentario no pudo ser creado", 500);
      }
    } else{
      return $this->view->response("Faltan datos para insertar el comentario", 404);
    }
  }
  
  function insertCommentCategories($params = null){
    $body = $this->getBody();
    if (isset($body->comment) && isset($body->score) && isset($body->id_user) && isset($body->id_categoria))
      {
      $id = $this->apiModel->insertCommentCategory($body->comment, $body->score, $body->id_user, $body->id_categoria);
      if ($id != 1) {
        $this->view->response("El comentario de id=$id fue creado con exito", 200);
      } else{
        $this->view->response("El comentario no pudo ser creado", 500);
      }
    } else{
      return $this->view->response("Faltan datos para insertar el comentario", 404);
    }
  }
  

  function getCommentsByScore($params = null){
    $id_product = $params[":ID"];
    $score = $params[':SCORE'];
    $comments = $this->apiModel->getCommentsByScore($id_product, $score);
    if ($comments) {
      return $this->view->response($comments, 200);
    } else {
      return $this->view->response("El producto con ID:$id_product no existe", 404);
    }
  }

  private function getBody(){
    $bodyString = file_get_contents("php://input");
    return json_decode($bodyString);
  }


}


