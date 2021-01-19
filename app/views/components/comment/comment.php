<div class="c-comment">
  <div class="c-cmmt-photo">
    <?php 
      if ($comment->image !== 'NOT') {
        ?>
        <img src="<?php echo $comment->image; ?>" alt="Imagen de perfil de usuario">
    <?php
      } else {
        ?> <div></div> <?php
      }
    ?>
  </div>
  <div class="c-cmmt-data">
    <span class="c-cmmt-user"><?php echo $comment->nameuser ?></span>
    <p class="c-cmmt-comment"><?php echo $comment->comment ?></p>
  </div>
</div>