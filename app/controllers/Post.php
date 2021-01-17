<?php
  class Post extends Controller{
    private $actionsSql;

    public function __construct() {   
      $this->actionsSql = new ActionsSql();
    }
        
    public function p($idPost) {
      $currentUser = "juanasdabassd";
              
      $this->actionsSql = new ActionsSql();
      $data = $this->handlerGetPost($idPost);
      $postData = $data->fetch(PDO::FETCH_ASSOC);
    
      if ($postData) require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/post/Post.php");
      else header("location: /usernotfound");
    }

    public function edit($idPost) {
      $currentUser = 'juanasdabassd';
      $data = $this->handlerGetPost($idPost);
      $postData = $data->fetch(PDO::FETCH_ASSOC);

      if ($postData && $currentUser == $postData['iduser'])
        require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/post/UpdatePost.php");
      else header("location: /home");
    }

    public function d($idPost) {
      $currentUser = 'juanasdabassd';
      $data = $this->handlerDeletePost($idPost);
      $postData = $data->fetch(PDO::FETCH_ASSOC);

      if ($postData && $currentUser == $postData['iduser'])
        require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/post/UpdatePost.php");

      else header("location: /home");
    }

    public function handlerDeletePost($idPost) {
      $condition = "idpost = '$idPost'";
      $table = "post";
      if ($this->actionsSql->deleteItem($condition, $table)) 
        return header('location: /home');
            
      return header('location: /algosaliomal');
    }

    public function handlerGetPost(string $idPost) {
      $sql = "SELECT * FROM post JOIN user ON user.iduser = post.iduser AND post.idpost = '$idPost'";
              
      return $this->actionsSql->handlerSelectData($sql);
    }

    public function handlerUpdatePost($idpost, $titlepost, $description, $URLimage, $category) {
      $condition = "idpost = '$idpost'";
      $table = "post";
      $values = "description = '$description', titlepost = '$titlepost', postimage = '$URLimage', category = '$category'";
            
      $this->actionsSql->updateItems($condition, $table, $values);
      header("location: /post/p/$idpost");
    }

    public function handlerGetAllPosts() {
      $sql = "SELECT * FROM post";

      return $this->actionsSql->handlerSelectData($sql);
    }
  }
