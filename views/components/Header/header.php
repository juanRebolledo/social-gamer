<link rel="stylesheet" href="<?php echo "$_SESSION[COMPONENTS_PATH]"."Header/header.css" ?>">
<header>
  <div class="app-logo"><h1>Logo App</h1></div>
  <div class="container-search">
    <div class="form-group">
      <input type="text" placeholder="Busqueda">
    </div>
    <button type="button" style="<?php echo "background: #6c63ff url($_SESSION[ASSETS_PATH]/img/loupe.svg) no-repeat;background-position: center;background-size: 20px"?>"></button>
  </div>
  <nav>
    <div class="item-header-container plus">
      <?php require_once("$_SESSION[ASSETS_PATH]/img/create_post.svg"); ?>
      <div class="item-tooltip">
        <p>Crear</p>
      </div>
    </div>
    <div class="item-header-container">
      <?php require_once("$_SESSION[ASSETS_PATH]/img/send_message.svg"); ?>
      <div class="item-tooltip">
        <p>Mensajes</p>
      </div>
    </div>
  </nav>
</header>