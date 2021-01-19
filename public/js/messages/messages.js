const targetMessagesContainer = document.getElementById('messages');
const btnSendMessage = document.getElementById('btn-send-message');
const targetMessageToSend = document.getElementById('message-to-send');

targetMessagesContainer.innerHTML = '<div class="lds-dual-ring"></div>'

let data = [];

ref.on('value', (snapshot) => {
  if (snapshot.val()) {
    data = Object.values(snapshot.val());
    
    targetMessagesContainer.innerHTML = "";
    data.forEach(function(msg) {
      if (msg.user == localStorage.getItem('currentUser')) {
        targetMessagesContainer.innerHTML += `<div class="msg msgR"><span>${msg.text}</span></div>`;
        return;
      }
      targetMessagesContainer.innerHTML += `<div class="msg msgL"><span>${msg.text}</span></div>`;
    });
    targetMessagesContainer.scrollTop = targetMessagesContainer.scrollHeight;
  } else {
    targetMessagesContainer.innerHTML = `<div>No hay mensajes aún</div>`
  }
});

function clearTargetMessage() {
  document.getElementById('message-to-send').value = '';
}

function sendMessage() {
  let msgToSend = document.getElementById('message-to-send').value;
  
  if (msgToSend.length > 0) {
    const date = new Date();
    const data = { user: localStorage.getItem('currentUser'), text: msgToSend, date: date.toISOString() };
    addElementToFirebase(data);
    clearTargetMessage();
  }
}

btnSendMessage.addEventListener('click', function() { sendMessage() });
btnSendMessage.addEventListener('keypress', function(e) { 
  if (e.key === 'Enter')  sendMessage(); 
});
targetMessageToSend.addEventListener('keypress', function(e) {
  if (e.key === 'Enter') sendMessage();
})
