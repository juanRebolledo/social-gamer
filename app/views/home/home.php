<?php
  $post = new post();
  $posts = $post->handlerGetAllPosts(" ");

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
      $postOfUser = $posts;
      $title = "Explora";
      require("{$PATH->POSTS}postsScrolling.php");
      
      // $postOfUser = $postsSports;
      // $title = "Deportes";
      // require("{$PATH->POSTS}postsScrolling.php");
      
      // $postOfUser = $postsAdventure;
      // $title = "Aventura";
      // require("{$PATH->POSTS}postsScrolling.php");
    
      // $postOfUser = $postsMOBA;
      // $title = "MOBA";
      // require("{$PATH->POSTS}postsScrolling.php");

      // $postOfUser = $postsFPS;
      // $title = "FPS";
      // require("{$PATH->POSTS}postsScrolling.php");

      // $postOfUser = $postsRPG;
      // $title = "RPG";
      // require("{$PATH->POSTS}postsScrolling.php");
    ?>
  </div>
</body>
</html>
