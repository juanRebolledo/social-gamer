const storage = firebase.storage();
const btnUploadImage = document.getElementById("btn_uploadImage");
const loading = document.getElementById("loading");

btnUploadImage.addEventListener("click", function () {
  const targetFileSelector = document.getElementById("image-selector");
  const file = targetFileSelector.files[0];

  if (file || targetImgFileSelected.src.split("/NOT")[1] === "") {
    if (targetImgFileSelected.src.split("/NOT")[1] === "") {
      document.getElementById("url_image_to_mysql").value = "NOT";
      document.getElementById("activateAction").click();

      return;
    }

    const nameOfFile = targetFileSelector.files[0].name;
    const imageRefToStorage = `${Math.random().toFixed(4)}-${nameOfFile}`;
    const storageRef = storage.ref(imageRefToStorage);
    const task = storageRef.put(file);

    task.on(
      "state_changed",
      function (snapshot) {
        let porcentaje = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;

        loading.style.display = "flex";
        loading.innerHTML = "<div class='lds-dual-ring'></div>";
      },
      function (error) {
        console.error(error);
      },
      function () {
        task.snapshot.ref.getDownloadURL().then(function (downloadURL) {
          loading.style.display = "none";
          document.getElementById("url_image_to_mysql").value = downloadURL;
          document.getElementById("activateAction").click();

          return;
        });
      }
    );

    return;
  } else if (targetImgFileSelected.src !== "#") {
    document.getElementById("url_image_to_mysql").value = targetImgFileSelected.src;
    document.getElementById("activateAction").click();
  }
});
