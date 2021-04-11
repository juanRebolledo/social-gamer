<div class="container-form flex-center">
  <div class="loading flex-center" id="loading"></div>
  <form action="/user/update" class="flex-center" method="post">
    <div class="form-group group-file">
      <?php
      if ($userInformation['image'] !== 'NOT') {
        echo "<input accept='image/gif,image/jpeg' class='form-file' id='image-selector' onchange='onChangeFileImage(this)' type='file'>
                <img id='image-selected' src='$userInformation[image]' alt='your image' style='display: block' />";
      } else {
        echo "<input accept='image/gif,image/jpeg' class='form-file' id='image-selector' onchange='onChangeFileImage(this)' type='file'>
          <img id='image-selected' src='/NOT' alt='your image' />";
      }
      ?>
    </div>

    <div class="container-data-inputs flex-center">
      <button id="btn_uploadImage" type="button">Actualizar</button>
      <div class="form-group">
        <input autocomplete="off" class="form-control" type="text" placeholder="Nombre" name="nameuser" required value="<?php echo "$userInformation[nameuser]" ?>">
        <label class="form-label">Nombre</label>
      </div>

      <div class="form-group">
        <input autocomplete="off" class="form-control" type="text" placeholder="Usuario" name="username" required value="<?php echo "$userInformation[username]" ?>">
        <label class="form-label">Usuario</label>
      </div>

      <div class="form-group">
        <input autocomplete="off" class="form-control" type="text" placeholder="Facebook" name="facebook" value="<?php echo "$userInformation[facebook]" ?>">
        <label class="form-label">Facebook</label>
      </div>

      <div class="form-group">
        <input autocomplete="off" class="form-control" type="text" placeholder="Twitter" name="twitter" value="<?php echo "$userInformation[twitter]" ?>">
        <label class="form-label">Twitter</label>
      </div>

      <div class="form-group">
        <input autocomplete="off" class="form-control" type="text" placeholder="Twitch" name="twitch" value="<?php echo "$userInformation[twitch]" ?>">
        <label class="form-label">Twitch</label>
      </div>

      <div class="form-group">
        <input autocomplete="off" class="form-control" type="email" placeholder="Email" name="email" required value="<?php echo "$userInformation[email]" ?>">
        <label class="form-label">Email</label>
      </div>

      <div class="form-group">
        <input autocomplete="off" class="form-control" type="password" placeholder="Contraseña" name="password" required value="<?php echo "$userInformation[password]" ?>">
        <label class="form-label">Contraseña</label>
      </div>
    </div>
    <input hidden type='text' id='url_image_to_mysql' name='url_image_to_mysql'></input>
    <input hidden type='text' id='iduser' name='iduser' value="<?php echo $userInformation['iduser'] ?>"></input>
    <button id="activateAction" hidden></button>
  </form>
</div>
