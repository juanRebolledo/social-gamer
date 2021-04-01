<div class="posts">
  <?php 
    echo (isset($title) ? "<p class='title-post'>${title}</p>" : "");
  ?>

  <div class="align-content-start container-posts d-flex flex-column">
    <?php 
      $count = 1;
      $isTherePost = false;
      foreach ($postOfUser->fetchAll() as $post) {
        $isTherePost = true;
          
        if ($count === 1) {
          echo "
            <a href='/post/p/{$post->idpost}' class='post b'>
              <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
            </a>";
          $count++;
        } else if ($count === 2) {
          echo "
            <div class='post-s'>
              <a href='/post/p/{$post->idpost}' class='post s'>
                <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
              </a>";
          $count++;
        } else if($count === 3) {

        echo "
            <a href='/post/p/{$post->idpost}' class='post s'>
              <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
            </a>
          </div>";
        $count++;
        } else if ($count === 4) {
          echo "
            <div class='post-s'>
              <a href='/post/p/{$post->idpost}' class='post s'>
                <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
              </a>";
          $count++;
        } else if($count === 5) {
          echo "
              <a href='/post/p/{$post->idpost}' class='post s'>
                <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
              </a>
            </div>";
          $count++;
        } else if ($count === 6) {
          echo "
            <a href='/post/p/{$post->idpost}' class='post b'>
              <img loading='lazy' src='$post->postimage' alt='imagen post gamer social'>
            </a>";
          $count = 1;
        } 
      }

      if(!$isTherePost)
        echo "<h1>Aún no existen posts</h1>";
    ?>
  </div>
</div>
