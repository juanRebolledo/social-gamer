<?php 
    $post = new Post();
    $posts = $post->handlerGetAllPosts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PATH = new PATH(); 
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
            if ($postOfUser) {
              require_once("{$PATH->POSTS}PostsScrolling.php");
            } else {
              echo "<h1>Aún nadie publica nada</h1>";
            }
          ?>
    </div>
</body>
</html>