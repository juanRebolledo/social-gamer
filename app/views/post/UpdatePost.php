<?php 
    $sessionMapper = new SessionMapper();
    if(!$sessionMapper->isActiveSession())
        header("Location: /");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new Path(); 
    require_once("{$PATH->HEAD}head.php");
    require_once("{$PATH->HEAD}firebaseHead.php");
    ?>
  <link rel="stylesheet" href="/<?php echo "{$PATH->CSS}createPost.css"?>">
  <title>Editar : <?php echo $postData['titlepost'] ?></title>
</head>
<body>
  <div class="app">

    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <?php require_once("{$PATH->FORMS}formUpdatePost.php"); ?>

    <script src="/<?php echo str_replace('\\', '/' ,$PATH->FIREBASE) . "config.js" ?>"></script>
    <script src="/<?php echo str_replace('\\', '/' ,$PATH->JS) . "uploadImage/onChangeFile.js" ?>"></script>
    <script src="/<?php echo str_replace('\\', '/' ,$PATH->JS) . "uploadImage/uploadImage.js" ?>"></script></body>
  </div>
</body>
</html>
