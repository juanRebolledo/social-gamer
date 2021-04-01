<?php
  if ($network !== 'NOT') {
?>
  <div class="u-p-a-network tooltip left flex-center">
    <a href="<?php echo $network ?>">
      <?php require("{$PATH->IMG}$svg.svg") ?>
    </a>

    <div class="item-tooltip">
      <p><?php echo $tooltip ?></p>
    </div>
  </div>
<?php
  }
?>
