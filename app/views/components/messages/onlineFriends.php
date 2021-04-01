<div class="c-online-friend tooltip tooltip-fixed">
  <a href="/messages/t/<?php echo $chatRoom['idChat'] ?>">
    <?php
      $image = $this->actionsSql->handlerSelectColumn('image', 'iduser', 'user', $addressee);
      if ($image == 'NOT') echo "<div class='img-user'></div>";

      else echo "<img class='img-user' src='$image'>";
    ?>
  </a>

  <div class="item-tooltip">
    <?php
      $username = $this->actionsSql->handlerSelectColumn('username', 'iduser', 'user', $addressee);
      echo "<p>$username</p>";
    ?>
  </div>
</div>
