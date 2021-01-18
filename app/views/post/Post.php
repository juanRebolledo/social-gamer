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
        require_once("{$PATH->HEAD}head.php") 
    ?>
    <link rel="stylesheet" href="/<?php echo "{$PATH->CSS}post.css"; ?>">
    <title><?php echo $postData['titlepost'] ?></title>
</head>
<body>
    <div class="app">
        <?php require_once("{$PATH->HEADER}header.php"); ?>
        <div class="c-u-p flex-center">
          <div class="c-u-i">
            <div class="u-profile-link">
              <a href="/<?php echo "user/u/$postData[iduser]"; ?>">
                <img src="<?php echo $postData['image']; ?>" alt="Imagen de perfil de usuario">
              </a>
              <span><?php echo $postData['nameuser'] ?></span>
            </div>
          </div>
          <div class="c-p">
            <?php
              if ($_SESSION['iduser'] == $postData['iduser']) {
                echo "<div class='c-p-u-i'>";  
                $network = "/post/edit/$postData[idpost]";
                $svg = "Edit";
                $tooltip = 'Editar';
                require("{$PATH->PROFILE}social.php");
                
                $network = "/post/d/$postData[idpost]";
                $svg = "Delete";
                $tooltip = 'Eliminar';
                require("{$PATH->PROFILE}social.php");
                echo "</div>";  
              }
            ?>
            <div class="c-p-data flex-center">
              <div class="c-p-data-img">
                <img src="<?php echo $postData['postimage'] ?>" alt="Imagen post social gamer">
              </div>
              <div class="c-p-data-data">
                <h1><?php echo $postData['titlepost'] ?></h1>
                <p class="description-post"><?php echo $postData['description'] ?></p>
              </div>

            </div>
            <div class="c-p-comments">
              <form action='<?php echo "/Create/comment/$_SESSION[iduser]/$postData[idpost]"; ?>' method="POST" class="i-btn flex-center">
                <div class="form-group">
                  <input type="text" placeholder="Deja tu comentario" id="comment" name="comment" required>
                </div>
                <button style="<?php echo "background: #6c63ff url(/". str_replace('\\', '/' ,$PATH->IMG) ."comment.svg) no-repeat;background-position: center;background-size: 20px"?>"></button>
              </form>
              <div class="comments">
                <?php 
                  while ($comment = $comments->fetch()) {
                    require("{$PATH->COMPONENTS}comment/comment.php");
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>