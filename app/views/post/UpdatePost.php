<?php 
    $sessionMapper = new SessionMapper();
    if(!$sessionMapper->isActiveSession())
        header("Location: /welcome");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new PATH(); 
    require_once("{$PATH->HEAD}head.php");
    require_once("{$PATH->HEAD}firebaseHead.php");
    ?>
  <link rel="stylesheet" href="/<?php echo "{$PATH->CSS}createPost.css"?>">
  <title>Editar : <?php echo $postData['titlepost'] ?></title>
</head>
<body>
  <div class="app">

    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <?php require_once("{$PATH->FORMS}FormUpdatePost.php"); ?>

    <script src="/<?php echo str_replace('\\', '/' ,$PATH->FIREBASE) . "config.js" ?>"></script>
    <script src="/<?php echo str_replace('\\', '/' ,$PATH->JS) . "uploadImage/onChangeFile.js" ?>"></script>
    <script src="/<?php echo str_replace('\\', '/' ,$PATH->JS) . "uploadImage/uploadImage.js" ?>"></script></body>
  </div>
</body>
</html>