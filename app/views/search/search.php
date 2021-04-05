<?php
  $post = new post();
  $posts = $post->handlerGetAllPosts(" WHERE `titlepost` LIKE '$textToSearch%'");
  $sessionMapper = new SessionMapper();

  if (!$sessionMapper->isActiveSession())
    header("Location: /welcome");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new Path();
    require_once("{$PATH->HEAD}head.php")
  ?>
  <link rel="stylesheet" href="<?php echo "{$PATH->CSS_POST}postsScrolling.css" ?>">
  <title>Gamer Social</title>
</head>
<body>
  <div class="app">
    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <?php
      $title = "Resultados de la busqueda: $textToSearch";
      $postOfUser = $posts;
      require("{$PATH->POSTS}postsScrolling.php");
    ?>
  </div>
</body>
</html>
