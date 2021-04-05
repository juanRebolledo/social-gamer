<div class="posts">
  <?php 
    echo (isset($title) ? "<p class='title-post'>${title}</p>" : "");
  ?>

  <?php 
    $count = 1;
    $isReverse = false;
    $isTherePost = false;
    foreach ($postOfUser->fetchAll() as $post) {
      $isTherePost = true;

      if ($count == 1) {
        echo $isReverse ? "<div class='align-content-center container-posts d-flex reverse'>" : "<div class='align-content-center container-posts d-flex'>";
        echo "
          <a href='/post/p/{$post->idpost}' class='post b'>
            <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
          </a>
          <div class='post-s'>";
      } else if ($count >= 2 && $count <= 5) {
        echo "
            <a href='/post/p/{$post->idpost}' class='post s'>
              <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
            </a>";
        if ($count == 5) {
          echo "
              </div>
            </div>";
          $count = 0;
          $isReverse = $isReverse ? false : true;
        }
      }
      $count++;
    }
  ?>
  </div>
</div>
