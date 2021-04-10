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
  require_once("{$PATH->HEAD}head.php");
  require_once("{$PATH->HEAD}firebaseHead.php");
  ?>
  <link rel="stylesheet" href="/<?php echo "{$PATH->CSS_POST}post.css"; ?>">
  <link rel="stylesheet" href="/<?php echo "{$PATH->CSS}modals.css"; ?>">
  <title><?php echo $postData['titlepost'] ?></title>
</head>

<body>
  <div class="app">
    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <div class="c-u-p flex-center flex-column">
      <div class="c-p d-flex justify-content-evenly">
        <div class='c-p-u-i'>
          <div class='u-profile-link u-p-a-network tooltip left flex-center'>
            <a href="/<?php echo "user/u/$postData[iduser]"; ?>">
              <?php
              if ($postData['image'] != 'NOT') {
                echo "<img alt='Imagen de perfil de usuario' loading='lazy' src='$postData[image]'>";
              } else {
                require("{$PATH->IMG}notPhotoUser.svg");
              }
              ?>
            </a>
            <div class='item-tooltip'>
              <p><?php echo $postData['username'] ?></p>
            </div>
          </div>

          <?php
          if ($_SESSION['iduser'] == $postData['iduser']) {
            $network = "/post/edit/$postData[idpost]";
            $svg = "Edit";
            $tooltip = 'Editar';
            require("{$PATH->PROFILE}social.php");

            $network = "/post/d/$postData[idpost]";
            $svg = "Delete";
            $tooltip = 'Eliminar';
            require("{$PATH->PROFILE}social.php");
          }
          ?>

          <div class="align-items-center d-flex flex-column justify-content-between post-likes">
            <div class="heart" id="heart"></div>
            <span id="likes-count">...</span>
          </div>
        </div>
        <div class="align-items-center c-p-data d-flex flex-column justify-content-start">
          <div class="c-p-data-img">
            <a id="bigImage" onclick="openModal()" style="cursor:pointer">
              <img alt="Imagen post social gamer" loading="lazy" src="<?php echo $postData['postimage'] ?>">
            </a>
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
            $thereAreComments = false;
            while ($comment = $comments->fetch()) {
              $thereAreComments = true;
              require("{$PATH->COMPONENTS}comment/comment.php");
            }
            if (!$thereAreComments) {
            ?>
              <div class='flex-center flex-column no-comments'>
                <?php
                echo "<img loading='lazy' src='/{$PATH->ICONS}no-comments.svg' />";
                ?>
                <h1>Aún no existen comentarios</h1>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal for big image -->
  <div class="modal--ini" id="bigModal" onclick="this.style.display='none'">
      <div class="modal-content">
        <div class="modal--image">
          <img src="<?php echo $postData['postimage'] ?>" alt="Imagen post social gamer">
        </div>
      </div>
  </div>

  <script src="/<?php echo str_replace('\\', '/', $PATH->FIREBASE) . "config.js" ?>"></script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->FIREBASE) . "firebase.js" ?>"></script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->JS) . "likes/likes.js" ?>"></script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->JS) . "modal/modals.js" ?>"></script>
</body>

</html>