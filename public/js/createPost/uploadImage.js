const storage = firebase.storage();

const btnSavePost = document.getElementById('save_post');

btnSavePost.addEventListener('click', function() {
  const targetFileSelector = document.getElementById('image-selector');
  const file = targetFileSelector.files[0];

  if (file) {
    const nameOfFile = targetFileSelector.files[0].name;
    const imageRefToStorage = `${Math.random().toFixed(4)}-${nameOfFile}`
    
    const storageRef = storage.ref(imageRefToStorage);
  
    const task = storageRef.put(file);
  
    task.on('state_changed', function(snapshot) {
      let porcentaje = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      console.log(porcentaje);
    }, function(error) {
      console.error(error);
    }, function() {
      task.snapshot.ref.getDownloadURL().then(function(downloadURL) {
        //TODO: downloadURL is the url of an image uploaded. We must pass it to database
        console.log('File available at', downloadURL);
        targetFileSelector.value = null;
      })  
    })
    
    return
  } 

  alert('Falta imagen!');
})

