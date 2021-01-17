<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new PATH(); 
    require_once("{$PATH->HEAD}head.php");
    require_once("{$PATH->HEAD}firebaseHead.php");
    ?>
  <link rel="stylesheet" href="<?php echo "{$PATH->CSS}createPost.css"?>">
  <title>Gamer Social | Crear</title>
</head>
<body>
  <div class="app">
    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <?php require_once("{$PATH->FORMS}FormCreate.php"); ?>
    <script src="<?php echo str_replace('\\', '/', $PATH->FIREBASE) . "config.js" ?>"></script>
    <script src="<?php echo "{$PATH->JS}/createPost/onChangeFile.js" ?>"></script>
    <script src="<?php echo "{$PATH->JS}/createPost/uploadImage.js" ?>"></script>
  </div>
</body>
</html>