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
              
              $data = $this->handlerGetSocialNetworks($userInformation['idsocialnetwork']);
              $networks = $data->fetch(PDO::FETCH_ASSOC);
              
              $count = 0;
              foreach($networks as $network) {
                if ($count == 3) continue;
                $svg = $socialNetworks[$count];
                $tooltip = $socialNetworks[$count];
                require("{$PATH->PROFILE}social.php");
                
                $count++;
              }
            ?>
          </div>
        </div>
        <div class="u-p-posts">
          <?php 
            $posts = 0;
            $limit = 8;
            require_once("{$PATH->POSTS}PostsScrolling.php") ?>
        </div>
      </div>
    </div>
</body>
</html>