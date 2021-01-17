const storage = firebase.storage();

const btnSavePost = document.getElementById('update_user');
const loading = document.getElementById('loading');

btnSavePost.addEventListener('click', function() {
  const targetFileSelector = document.getElementById('image-selector');
  const file = targetFileSelector.files[0];

  if (file || targetImgFileSelected.src.split('/NOT')[1] === '') {
    if (targetImgFileSelected.src.split('/NOT')[1] === '') {
      console.log('Cambiar imagen a NOT');        
      document.getElementById('url_image_to_mysql').value = 'NOT';
      document.getElementById('set_update_user').click();
      return
    } 
    console.log('Cambiar imagen a nueva');
    const nameOfFile = targetFileSelector.files[0].name;
    const imageRefToStorage = `${Math.random().toFixed(4)}-${nameOfFile}`
    
    const storageRef = storage.ref(imageRefToStorage);
  
    const task = storageRef.put(file);
  
    task.on('state_changed', function(snapshot) {
      let porcentaje = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      console.log(porcentaje);

      loading.style.display = 'flex';
      loading.innerHTML = "<div class='lds-dual-ring'></div>";

    }, function(error) {
      console.error(error);
    }, function() {
      task.snapshot.ref.getDownloadURL().then(function(downloadURL) {
        //TODO: downloadURL is the url of an image uploaded. We must pass it to database
        targetFileSelector.value = null;
        loading.style.display = "none";

        document.getElementById('url_image_to_mysql').value = downloadURL;
        document.getElementById('set_update_user').click();
        return;
      })  
    })
    
    return
  } else if (targetImgFileSelected.src !== '#') {
    console.log('No cambiar imagen');
    document.getElementById('url_image_to_mysql').value = targetImgFileSelected.src;
    document.getElementById('set_update_user').click();
  }
})

