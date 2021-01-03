<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once("$_SESSION[COMPONENTS_PATH]"."head.php") ?>
  <link rel="stylesheet" href="<?php echo "$_SESSION[COMPONENTS_PATH]"."PostsScrolling/postsScrolling.css?v=". rand() ?>">
  <title>Home</title>
</head>
<body>
  <?php require_once("$_SESSION[COMPONENTS_PATH]"."Header/header.php"); ?>
  <?php 
    // TODO: Aqui se extraen los Posts y se consumen en el componente 'PostsScrolling'
    $posts = 0;
    $limit = 8;
    require("$_SESSION[COMPONENTS_PATH]"."PostsScrolling/PostsScrolling.php"); 
    $posts = 0;
    $limit = 3;
    $title = "Area Gamer 2";
    require("$_SESSION[COMPONENTS_PATH]"."PostsScrolling/PostsScrolling.php"); 
  ?>
</body>
</html>