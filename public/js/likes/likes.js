const currentPost = location.href.split('/p/')[1];
const strLikesRefer = `likes/${currentPost}`;
const likesRef = database.ref(strLikesRefer);

const heartElement = document.getElementById('heart');
const likesCountElement = document.getElementById('likes-count');

heartElement.addEventListener('click', () => {
  heartElement.classList.toggle('like')
  likesRef.transaction((likes) => {
    if (likes) {
      likes++;
    } else {
      likes = 1;
    }

    return likes;
  })
})

likesRef.on('value', (snapshot) => {
  if (snapshot.val()) {
    heartElement.style.setProperty('--c-heart', '#6c63ff');
    likesCountElement.innerHTML = snapshot.val();
  } else {
    likesCountElement.innerHTML = '0';
  }
})
