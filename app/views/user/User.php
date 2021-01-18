<?php 
    $sessionMapper = new SessionMapper();
    if(!$sessionMapper->isActiveSession())
        header("Location: /welcome");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PATH = new PATH(); 
        require_once("{$PATH->HEAD}head.php");
    ?>
    <link rel="stylesheet" href="<?php echo("/{$PATH->CSS}user.css"); ?>">
    <link rel="stylesheet" href="<?php echo("/{$PATH->CSS}postsScrolling.css"); ?>">
    <title>Gamer Social | User</title>
</head>
<body>
    <div class="app">
      <?php require_once("{$PATH->HEADER}header.php"); ?>
      <div class="c-u-profile flex-center">
        <div class="u-p-about flex-center">
          <div class="u-p-a-info flex-center">
            <div class="profile-photo">
              <?php 
                if ($userInformation['image'] !== 'NOT')
                  echo "<img src='$userInformation[image]' alt='Foto de perfil usuario Gamer social' >"
              ?>
            </div>
            <div class="profile-name">
              <h1><?php echo $userInformation['nameuser'] ?></h1>
              <h2><?php echo $userInformation['username'] ?></h2>
            </div>
          </div>
          <div class="u-p-a-social flex-center">
            <?php 
              $network = "/user/edit/$idUser";
              $svg = "edit";
              $tooltip = 'Editar';
              require("{$PATH->PROFILE}social.php");
              
              foreach($socialNetworks as $socialnetwork) {
                $network = $userInformation[strtolower($socialnetwork)];
                $svg = $socialnetwork;
                $tooltip = $socialnetwork;
                require("{$PATH->PROFILE}social.php");
              }
            ?>
          </div>
        </div>
        <div class="u-p-posts flex-center">
          <?php 
            if ($postOfUser) {
              require_once("{$PATH->POSTS}PostsScrolling.php");
            } else {
              echo "<h1>El usuario aún no cuenta con posts</h1>";
            }
          ?>
        </div>
      </div>
    </div>
</body>
</html>