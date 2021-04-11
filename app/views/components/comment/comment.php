<div class="c-comment d-flex justify-content-between">
  <a class="c-cmmt-photo" href="/user/u/<?php echo $comment->iduser ?>">
    <?php
      if ($comment->image !== 'NOT') {
    ?>
      <img alt="Imagen de perfil de usuario" loading="lazy" src="<?php echo $comment->image; ?>">
    <?php
      } else {
    ?> <img alt="Imagen de usuario no encontrada" loading="lazy" src="<?php echo "/{$PATH->IMG}notPhotoUser.svg"; ?>"> <?php
      }
    ?>
  </a>

  <div class="c-cmmt-data">
    <a class="c-cmmt-user" href="/user/u/<?php echo $comment->iduser ?>"><?php echo $comment->nameuser ?></a>
    <p class="c-cmmt-comment"><?php echo $comment->comment ?></p>
  </div>
</div>
