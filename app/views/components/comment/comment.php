<div class="c-comment d-flex justify-content-between">
  <div class="c-cmmt-photo">
    <?php
      if ($comment->image !== 'NOT') {
    ?>
      <img alt="Imagen de perfil de usuario" loading="lazy" src="<?php echo $comment->image; ?>">
    <?php
      } else {
    ?> <img alt="Imagen de usuario no encontrada" loading="lazy" src="<?php echo "/{$PATH->IMG}notPhotoUser.svg"; ?>"> <?php
      }
    ?>
  </div>

  <div class="c-cmmt-data">
    <span class="c-cmmt-user"><?php echo $comment->nameuser ?></span>
    <p class="c-cmmt-comment"><?php echo $comment->comment ?></p>
  </div>
</div>
