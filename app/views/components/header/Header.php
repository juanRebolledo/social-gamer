<link rel="stylesheet" href="<?php echo "{$PATH->CSS}header.css"?>">
<header>
  <a href="home" id="home-page" class="app-logo"><h1>Logo App</h1></a>
  <div class="container-search">
    <div class="form-group">
      <input type="text" placeholder="Busqueda">
    </div>
    <button type="button" style="<?php echo "background: #6c63ff url({$PATH->IMG}loupe.svg) no-repeat;background-position: center;background-size: 20px"?>"></button>
  </div>
  <nav>
    <div class="item-header-container plus">
      <a href="crear">
        <?php require_once("{$PATH->IMG}create_post.svg"); ?>
      </a>
      <div class="item-tooltip">
        <p>Crear</p>
      </div>
    </div>
    <div class="item-header-container">
      <a href="messages">
        <?php require_once("{$PATH->IMG}send_message.svg"); ?>
      </a>
      <div class="item-tooltip">
        <p>Mensajes</p>
      </div>
    </div>
  </nav>
</header>