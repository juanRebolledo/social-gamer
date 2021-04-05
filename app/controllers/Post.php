<?php
  class Post extends Controller{
    private $actionsSql;

    public function __construct() {   
      $this->actionsSql = new ActionsSql();
    }
        
    public function p($idPost) {              
      $data = $this->handlerGetPost($idPost);
      $postData = $data->fetch(PDO::FETCH_ASSOC);

      if ($postData) {
        $comments = $this->handlerGetComments($idPost);
        
        require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/post/post.php");
      }
      else header("location: /postnotfound");
    }

    public function update() {
      $description = $_POST['information_post'];
      $titlepost = $_POST['title_post'];
      $category = $_POST['category'];
      $URLimage = $_POST['url_image_to_mysql'];
      $idpost = $_POST['idpost'];
      
      $this->handlerUpdatePost($idpost, $titlepost, $description, $URLimage, $category);
    }

    public function edit($idPost) {
      $postData = $this->isTheAuthorOfPost($idPost);

      if ($postData)
        require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/post/updatePost.php");
      else 
        header("location: /home");
    }

    public function d($idPost) {
      if ($this->isTheAuthorOfPost($idPost)) {
        return $this->handlerDeletePost($idPost);
      }
      header("location: /home");
    }

    private function isTheAuthorOfPost($idPost) {
      $data = $this->handlerGetPost($idPost);
      $postData = $data->fetch(PDO::FETCH_ASSOC);

      if ($postData && $_SESSION['iduser'] == $postData['iduser'])
        return $postData;
      
      return false;
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

    public function handlerGetComments(string $idPost) {
      $sql = "SELECT * FROM `comment` JOIN user ON user.iduser = comment.iduser WHERE idpost = '$idPost'";

      return $this->actionsSql->handlerSelectData($sql);
    }

    public function handlerUpdatePost($idpost, $titlepost, $description, $URLimage, $category) {
      $condition = "idpost = '$idpost'";
      $table = "post";
      $values = "description = '$description', titlepost = '$titlepost', postimage = '$URLimage', category = '$category'";
            
      $this->actionsSql->updateItems($condition, $table, $values);
      header("location: /post/p/$idpost");
    }

    public function handlerGetAllPosts(string $condition) {
      $sql = "SELECT * FROM post$condition ORDER BY date DESC";

      return $this->actionsSql->handlerSelectData($sql);
    }
  }
