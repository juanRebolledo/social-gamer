const targetImgFileSelected = document.getElementById('image-selected');
const targetImgSelector = document.getElementById('image-selector');

const onChangeFileImage = (input) => {
  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onloadend = function(e) {
      targetImgFileSelected.style.display = "block"
      targetImgFileSelected.src = reader.result
    }
    reader.readAsDataURL(input.files[0]);
  }
}

targetImgFileSelected.addEventListener('click', function() {
  targetImgSelector.value = "";
  targetImgFileSelected.src = "/NOT"
  targetImgFileSelected.style.display = "none"
})