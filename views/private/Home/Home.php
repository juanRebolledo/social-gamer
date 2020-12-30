<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once("$_SESSION[COMPONENTS_PATH]"."head.php") ?>
  <title>Home</title>
</head>
<body>
  <?php require_once("$_SESSION[COMPONENTS_PATH]"."Header/header.php"); ?>
  <?php 
    // TODO: Aqui se extraen los Posts y se consumen en el componente 'PostsScrolling'
    require_once("$_SESSION[COMPONENTS_PATH]"."PostsScrolling/PostsScrolling.php"); 
  ?>
</body>
</html>