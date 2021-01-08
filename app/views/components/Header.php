<link rel="stylesheet" href="<?php echo "$_SESSION[COMPONENTS_PATH]"."Header/header.css?v=". rand() ?>">
<header>
  <a href="<?php echo ($_SESSION['SITE_ROOT'] . "?home");?>" id="home-page" class="app-logo"><h1>Logo App</h1></a>
  <div class="container-search">
    <div class="form-group">
      <input type="text" placeholder="Busqueda">
    </div>
    <button type="button" style="<?php echo "background: #6c63ff url($_SESSION[ASSETS_PATH]/img/loupe.svg) no-repeat;background-position: center;background-size: 20px"?>"></button>
  </div>
  <nav>
    <div class="item-header-container plus">
      <a href="<?php echo ($_SESSION['SITE_ROOT'] . "?create");?>">
        <?php require_once("$_SESSION[ASSETS_PATH]/img/create_post.svg"); ?>
      </a>
      <div class="item-tooltip">
        <p>Crear</p>
      </div>
    </div>
    <div class="item-header-container">
      <a href="<?php echo ($_SESSION['SITE_ROOT'] . "?chat");?>">
        <?php require_once("$_SESSION[ASSETS_PATH]/img/send_message.svg"); ?>
      </a>
      <div class="item-tooltip">
        <p>Mensajes</p>
      </div>
    </div>
  </nav>
</header>