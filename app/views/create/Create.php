<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new PATH(); 
    require_once("{$PATH->HEAD}head.php");
    ?>
  <link rel="stylesheet" href="<?php echo "{$PATH->CSS}createPost.css"?>">
  <title>Gamer Social | Crear</title>
</head>
<body>
  <div class="app">
    <?php require_once("{$PATH->HEADER}header.php"); ?>
    <div class="create flex-center">
      <div class="container-create-post flex-center">
        <div class="container-create-form">
          <form>
            <div class="container-save flex-center">
              <div class="form-group select">
                <select class="form-control" name="category" id="category" required>
                  <option value="sports">Deportes</option>
                  <option value="fps">FPS</option>
                  <option value="moba">MOBA</option>
                  <option value="adventure">Aventura</option>
                  <option value="rpg">RPG</option>
                </select>
                <button type="button">Guardar</button>
              </div>
            </div>
            <div class="container-form-inputs">
              <div class="form-group group-file">
                <input accept="image/gif,image/jpeg" class="form-file" id="image-selector" onchange="onChangeFileImage(this)" type="file" required>
                <img id="image-selected" src="#" alt="your image" />
              </div>
              <div class="form-group">
                <input autocomplete="off" class="form-control" type="text" placeholder="Titulo" name="title_post" required>
                <label class="form-label">Titulo</label>
              </div>
              <div class="form-group group-textarea">
                  <textarea autocomplete="off" class="form-control" type="text" placeholder="Text" name="information_post" required></textarea>
                  <label class="form-label">Acerca del post...</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <script src="<?php echo "{$PATH->JS}/createPost/onChangeFile.js" ?>"></script>
    </div>
  </div>
</body>
</html>