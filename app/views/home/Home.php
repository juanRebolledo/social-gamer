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
            $posts = 0;
            $limit = 1;
            require_once("{$PATH->POSTS}/PostsScrolling.php"); 
            $posts = 0;
            $limit = 3;
            $title = "Area Gamer 2";
            require_once("{$PATH->POSTS}/PostsScrolling.php"); 
        ?>
    </div>
</body>
</html>