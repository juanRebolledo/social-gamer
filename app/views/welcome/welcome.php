<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    $PATH = new PATH();
    require_once("{$PATH->HEAD}head.php");
  ?>
  <link rel="stylesheet" href="<?php echo "{$PATH->CSS}landingPage.css" ?>">
  <title>Gamer Social</title>
</head>
<body class="landing-body">
  <div class="app">
    <header class="h-landing">
      <nav class="flex-center">
        <div class="logo-app">Logo App</div>
        <div class="btn-login">
          <a class="btn" href="/login">Iniciar Sesión</a>
        </div>
      </nav>
    </header>
    
    <section class="c-s-landing flex-center">
      <div class="banner-landing">
        <div class="slider flex-center">
          <div class="s-img">
            <img src="<?php echo str_replace('\\', '/' ,$PATH->IMG) . "landing-banner1.png" ?>" alt="La mejor comunidad gamer del mundo! Gamer social">
          </div>
          <div class="s-info">
            <h1>Unete a la mejor comunidad gamer</h1>
            <h2>Gamer social te permite conocer temas acerca del mundo del gaiming.</h2>
            <a class="btn register" href="/register">Unete aqui!</a>
          </div>
        </div>
        <div class="slider flex-center">
          <div class="s-img"></div>
          <div class="s-info"></div>
        </div>
        <div class="slider flex-center">
          <div class="s-img"></div>
          <div class="s-info"></div>
        </div>

        <div class="c-dots flex-center">
          <span class="dot" onclick="setSlider(1)"></span>
          <span class="dot" onclick="setSlider(2)"></span>
          <span class="dot" onclick="setSlider(3)"></span>
        </div>
      </div>
    </section>
  </div>

  <script src="<?php echo str_replace('\\', '/' ,$PATH->JS) . "landing/slider.js" ?>"></script>
</body>
</html>