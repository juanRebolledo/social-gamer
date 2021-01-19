<?php 
    $post = new Post();
    $posts = $post->handlerGetAllPosts(" ");
    $postsSports = $post->handlerGetAllPosts(" WHERE category = 'Deportes'");
    $postsAdventure = $post->handlerGetAllPosts(" WHERE category = 'Aventura'");
    $postsRPG = $post->handlerGetAllPosts(" WHERE category = 'RPG'");
    $postsMOBA = $post->handlerGetAllPosts(" WHERE category = 'MOBA'");
    $postsFPS = $post->handlerGetAllPosts(" WHERE category = 'FPS'");
    
    $sessionMapper = new SessionMapper();
    
    if(!$sessionMapper->isActiveSession())
      header("Location: /welcome");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PATH = new Path(); 
        require_once("{$PATH->HEAD}head.php") 
    ?>
    <link rel="stylesheet" href="<?php echo "{$PATH->CSS}postsScrolling.css" ?>">
    <title>Gamer Social</title>
</head>
<body>
    <div class="app">
        <?php require_once("{$PATH->HEADER}header.php"); ?>
        <?php 
            $postOfUser = $posts;
            require("{$PATH->POSTS}postsScrolling.php");
            
            $postOfUser = $postsSports;
            $title = "Deportes";
            require("{$PATH->POSTS}postsScrolling.php");
            
            $postOfUser = $postsAdventure;
            $title = "Aventura";
            require("{$PATH->POSTS}postsScrolling.php");
            
            $postOfUser = $postsMOBA;
            $title = "MOBA";
            require("{$PATH->POSTS}postsScrolling.php");
            
            $postOfUser = $postsFPS;
            $title = "FPS";
            require("{$PATH->POSTS}postsScrolling.php");
            
            $postOfUser = $postsRPG;
            $title = "RPG";
            require("{$PATH->POSTS}postsScrolling.php");
          ?>
    </div>
</body>
</html>