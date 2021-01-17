<?php 
    require_once("../core/Autoload.php");
    Autoload("C");

    $actionSql = new ActionsSql();
    session_start();
    $description = $_POST['information_post'];
    $titlepost = $_POST['title_post'];
    $categoryTable = $_POST['category'];
    $URLimage = $_POST['url_image_to_mysql'];
    $iduser = $_SESSION['iduser'];
    $idpost = uniqid('p_');
    $idcategory = uniqid('c_');
    
    $newPost=$actionSql->handlerInsertPost($idpost,$iduser,$titlepost,$description,$URLimage,$idcategory,$categoryTable);
    if ($newPost) return header("Location: /home");

    return header('Location: /noseguardo');
?>
