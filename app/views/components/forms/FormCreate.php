<div class="create flex-center">
  <div class="container-create-post flex-center">
    <div class="loading flex-center" id="loading"></div>

    <div class="container-create-form">
      <form action="/create/cpost" class="d-flex flex-column justify-content-around" method="POST">
        <div class="container-save flex-center">
          <div class="d-flex form-group select">
            <select class="form-control" name="category" id="category" required>
              <option value="Deportes">Deportes</option>
              <option value="FPS">FPS</option>
              <option value="MOBA">MOBA</option>
              <option value="Aventura">Aventura</option>
              <option value="RPG">RPG</option>
            </select>
            <button id="btn_uploadImage" type="button">Guardar</button>
          </div>
        </div>

        <div class="align-content-between container-form-inputs d-flex flex-column">
          <div class="form-group group-file">
            <input accept="image/gif,image/jpeg" class="form-file" id="image-selector" onchange="onChangeFileImage(this)" type="file" required>
            <img id="image-selected" loading="lazy" src="#" alt="your image" />
          </div>

          <div class="form-group">
            <input autocomplete="off" class="form-control" type="text" placeholder="Titulo" name="title_post" id="title_post" required>
            <label class="form-label">Titulo</label>
          </div>

          <div class="form-group group-textarea">
            <textarea autocomplete="off" class="form-control" type="text" placeholder="Text" name="information_post" id="information_post" required></textarea>
            <label class="form-label">Acerca del post...</label>
          </div>
        </div>
        <input hidden type='text' id='url_image_to_mysql' name='url_image_to_mysql'></input>
        <button id="activateAction" hidden></button>
      </form>
    </div>
  </div>
</div>
