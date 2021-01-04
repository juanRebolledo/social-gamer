<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once("$_SESSION[COMPONENTS_PATH]"."head.php") ?>
  <link rel="stylesheet" href="<?php echo "$_SESSION[COMPONENTS_PATH]"."PostsScrolling/postsScrolling.css?v=". rand() ?>">
  <title>Gamer Social</title>
</head>
<body>
  <?php require_once("$_SESSION[COMPONENTS_PATH]"."Header/header.php"); ?>
  <?php 
    if (isset($_GET['chat'])) {
      require_once("$_SESSION[VIEW_PRIVATE_PATH]" . "Chat/Chat.php");
    } else if (isset($_GET['create'])) {
      require_once("$_SESSION[VIEW_PRIVATE_PATH]" . "Post/Create.php");
    }else if (isset($_GET['home'])) {
      $posts = 0;
      $limit = 8;
      require("$_SESSION[COMPONENTS_PATH]"."PostsScrolling/PostsScrolling.php"); 
      $posts = 0;
      $limit = 3;
      $title = "Area Gamer 2";
      require("$_SESSION[COMPONENTS_PATH]"."PostsScrolling/PostsScrolling.php"); 
    }
  ?>
  <script src="<?php echo "$_SESSION[SITE_ROOT]js/routing.js" ?>"></script>
</body>
</html>