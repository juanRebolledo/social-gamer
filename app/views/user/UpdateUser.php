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
  <link rel="stylesheet" href="<?php echo ("/{$PATH->CSS}user.css"); ?>">
  <link rel="stylesheet" href="<?php echo ("/{$PATH->CSS}postsScrolling.css"); ?>">
  <title>Gamer Social | User</title>
</head>
<body>
  <div class="app">
    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <div class="c-u-profile flex-center">
      <?php require_once("{$PATH->FORMS}formUpdateUser.php"); ?>
    </div>
  </div>

  <script src="/<?php echo str_replace('\\', '/', $PATH->FIREBASE) . "config.js" ?>"></script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->JS) . "uploadImage/onChangeFile.js" ?>"></script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->JS) . "uploadImage/uploadImage.js" ?>"></script>
</body>
</html>
