<?php
  $sessionMapper = new SessionMapper();
  if (!$sessionMapper->isActiveSession())
    header("Location: /");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new Path();
    require_once("{$PATH->HEAD}head.php")
  ?>
  <link rel="stylesheet" href="/<?php echo "{$PATH->CSS_POST}post.css"; ?>">
  <title><?php echo $postData['titlepost'] ?></title>
</head>
<body>
  <div class="app">
    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <div class="c-u-p flex-center flex-column">
      <div class="c-u-i justify-content-start">
        <div class="align-items-center d-flex u-profile-link">
          <a href="/<?php echo "user/u/$postData[iduser]"; ?>">
            <?php
              if ($postData['image'] != 'NOT') {
                echo "<img alt='Imagen de perfil de usuario' loading='lazy' src='$postData[image]'>";
              } else {
                require("{$PATH->IMG}notPhotoUser.svg");
              }
            ?>
          </a>
          <span><?php echo $postData['nameuser'] ?></span>
        </div>
      </div>

      <div class="c-p d-flex justify-content-evenly">
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

        <div class="align-items-center c-p-data d-flex flex-column justify-content-start">
          <div class="c-p-data-img">
            <img alt="Imagen post social gamer" loading="lazy" src="<?php echo $postData['postimage'] ?>">
          </div>

          <div class="c-p-data-data">
            <h1><?php echo $postData['titlepost'] ?></h1>
            <p class="description-post"><?php echo $postData['description'] ?></p>
          </div>
        </div>

        <div class="c-p-comments">
          <form action='<?php echo "/create/comment/$_SESSION[iduser]/$postData[idpost]"; ?>' method="POST" class="i-btn flex-center">
            <div class="form-group">
              <input type="text" placeholder="Deja tu comentario" id="comment" name="comment" required>
            </div>
            <button style="<?php echo "background: #6c63ff url(/" . str_replace('\\', '/', $PATH->IMG) . "comment.svg) no-repeat;background-position: center;background-size: 20px" ?>"></button>
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