<?php 
    require_once("../core/Autoload.php");
    Autoload("C");

    $post = new Post();

    $description = $_POST['information_post'];
    $titlepost = $_POST['title_post'];
    $category = $_POST['category'];
    $URLimage = $_POST['url_image_to_mysql'];
    $idpost = $_POST['idpost'];
    
    $post->handlerUpdatePost($idpost, $titlepost, $description, $URLimage, $category);
?>
