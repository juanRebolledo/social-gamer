<?php
  $sessionMapper = new SessionMapper();
  
  if ($sessionMapper->isActiveSession())
    header("Location: /home");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new Path();
    require_once("{$PATH->HEAD}head.php");
  ?>
  <link rel="stylesheet" href="/<?php echo "{$PATH->CSS}landingPage.css" ?>">
  <title>Gamer Social</title>
</head>
<body class="landing-body">
  <div class="app">
    <header class="h-landing">
      <nav class="flex-center">
        <div class="logo-app"><img src="/<?php echo "{$PATH->IMG}LOGO.png" ?>" alt=""></div>
        <div class="btn-login">
          <a class="btn" href="/login">Iniciar Sesión</a>
        </div>
      </nav>
    </header>

    <section class="c-s-landing flex-center">
      <div class="banner-landing">
        <?php
          $src = str_replace('\\', '/', $PATH->IMG) . "landing-banner1.png";
          $alt = "La mejor comunidad gamer del mundo! Gamer social";
          $title = "Unete a la mejor comunidad gamer";
          $subtitle = "Gamer social te permite conocer temas acerca del mundo del gaiming.";
          $registerText = "Unete aqui!";
          require("{$PATH->LANDING}slider.php");
        ?>

        <?php
          $src = str_replace('\\', '/', $PATH->IMG) . "landing-banner2.png";
          $alt = "Gamer Social crear post";
          $title = "Crea contenido para el mundo";
          $subtitle = "Habla sobre tus videojuegos favoritos";
          $registerText = "Registrate!";
          require("{$PATH->LANDING}slider.php");
        ?>

        <?php
          $src = str_replace('\\', '/', $PATH->IMG) . "landing-banner3.png";
          $alt = "HomePage Gamer social";
          $title = "Explora todos los posts";
          $subtitle = "Registrate y comienza a leer!";
          $registerText = "Unete!";
          require("{$PATH->LANDING}slider.php");
        ?>

        <div class="c-dots flex-center">
          <span class="dot" onclick="setSlider(1)"></span>
          <span class="dot" onclick="setSlider(2)"></span>
          <span class="dot" onclick="setSlider(3)"></span>
        </div>
      </div>
    </section>
  </div>
  <script src="<?php echo str_replace('\\', '/', $PATH->JS) . "landing/slider.js" ?>"></script>
</body>
</html>
