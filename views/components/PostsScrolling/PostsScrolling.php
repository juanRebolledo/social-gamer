<div class="posts">
  <?php 
    echo (isset($title) ? "<p class='title-post'>${title}</p>" : "");
  ?>
  <div class="container-posts">
    <?php 
       $count = 1;
       while($posts != $limit) {
         if ($count === 1) {
           echo "<div class='post b'></div>";
           $count++;
         } else if ($count === 2) {
           echo "<div class='post-s'><div class='post s'></div>";
           $count++;
         } else if($count === 3) {
           echo "<div class='post s'></div></div>";
           $posts++;
           $count++;
         } else if ($count === 4) {
           echo "<div class='post-s'><div class='post s'></div>";
           $count++;
         } else if($count === 5) {
           echo "<div class='post s'></div></div>";
           $count++;
         } else if ($count === 6) {
           echo "<div class='post b'></div>";
           $count = 1;
           $posts++;
         } 
       }
    ?>
  </div>
</div>