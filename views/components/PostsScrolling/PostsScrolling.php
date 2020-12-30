<link rel="stylesheet" href="<?php echo "$_SESSION[COMPONENTS_PATH]"."PostsScrolling/postsScrolling.css" ?>">
<div class="posts">
  <div class="container-posts">
    <div class="post b"></div>
    <div class="post-s">
      <div class="post s"></div>
      <div class="post s"></div>
    </div>

    <div class="post-s">
      <div class="post s"></div>
      <div class="post s"></div>
    </div>
    <div class="post b"></div>
  </div>
</div>

<!-- <?php
  $count = 1;
  while(true) {
    if ($count === 1) {
      echo "<div class='post b'>$row[src]</div>";
      $count++;
    } else if ($count === 2) {
      echo "<div class='post-s'><div class='post s'>$row[src]</div>";
      $count++;
    } else if($count === 3) {
      echo "<div class='post s'>$row[src]</div></div>";
      $count++;
    } else if ($count === 4) {
      echo "<div class='post-s'><div class='post s'>$row[src]</div>";
      $count++;
    } else if($count === 5) {
      echo "<div class='post s'>$row[src]</div></div>";
      $count++;
    } else if ($count === 6) {
      echo "<div class='post b'>$row[src]</div>";
      $count = 1;
    } 
  }
?> -->