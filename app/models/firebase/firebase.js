const database = firebase.database();
const chatRoom = location.href.split('/t/')[1];
const refer = `chat/messages/${chatRoom}`;
const ref = database.ref(refer);

function addElementToFirebase(data) {
  ref.push(data);
}
