<?php    

class Create extends Controller{
  private $actionsSql;

  public function __construct() {
    $this->actionsSql = new ActionsSql();
  }

  public function comment($iduser, $idpost) {
    $comment = $_POST['comment'];
    $idcomment = uniqid('p_');

    $columns = "`idcomment`, `date`, `comment`, `iduser`, `idpost`";
    $values = "'$idcomment', '2020-12-12', '$comment', '$iduser', '$idpost'";

    $newComment=$this->actionsSql->insertItem($columns, "comment", $values);
    if ($newComment) return header("Location: /post/p/$idpost");

    return header('Location: /noseguardo');
  }

  public function cpost() {    
    $description = $_POST['information_post'];
    $titlepost = $_POST['title_post'];
    $category = $_POST['category'];
    $URLimage = $_POST['url_image_to_mysql'];
    $iduser = $_SESSION['iduser'];
    $idpost = uniqid('p_');
    
    $newPost=$this->actionsSql->handlerInsertPost($idpost, $iduser, $titlepost, $description, $URLimage, $category);
    if ($newPost) return header("Location: /post/p/$idpost");

    return header('Location: /noseguardo');
  }
}//end class Register