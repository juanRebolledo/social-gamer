const database = firebase.database();
const refer = `chat/messages/ashdasASDasasbd`;
const ref = database.ref(refer);

function addElementToFirebase(data) {
  ref.push(data);
}
