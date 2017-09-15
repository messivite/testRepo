// This object will be sent everytime you submit a message in the sendMessage function.
var clientInformation = {
    username: new Date().getTime().toString()
    // You can add more information in a static object
};

// START SOCKET CONFIG
/**
 * Note that you need to change the "sandbox" for the URL of your project.
 * According to the configuration in Sockets/Chat.php , change the port if you need to.
 * @type WebSocket
 */
var conn = new WebSocket('ws://127.0.0.1:8080');

conn.onopen = function(e) {
    console.info("Connection established succesfully");
};

conn.onmessage = function(e) {
    var data = JSON.parse(e.data);

    Chat.appendMessage(data.username, data.message);

    console.log(data);
};

conn.onerror = function(e){
    alert("Error: something went wrong with the socket.");
    console.error(e);
};
// END SOCKET CONFIG


/// Some code to add the messages to the list element and the message submit.
document.getElementById("yardim").addEventListener("click",function(e){

  Chat.sendMessage('Mustafa yardım istiyor',1);
}, false);

/// Some code to add the messages to the list element and the message submit.
document.getElementById("sendMessageBtn").addEventListener("click",function(e){


  var msg = document.getElementById("message-box").value;

  if(!msg){
      alert("Bir mesaj girin");
      return false;
  }

  Chat.sendMessage(msg,1);
}, false);


// Mini API to send a message with the socket and append a message in a UL element.
var Chat = {
    appendMessage: function(username,message,studentId){
        var from;

        if(username == clientInformation.username){
            from = "me";
        }else{
            from = clientInformation.username;
        }

        console.log(message);
        console.log(studentId);
        // Append List Item

    },
    sendMessage: function(text,studentId){
        clientInformation.message = text;
        clientInformation.studentId = studentId;
        // Send info as JSON
        conn.send(JSON.stringify(clientInformation));
        // Add my own message to the list
        this.appendMessage(clientInformation.username, clientInformation.message,clientInformation.studentId);
    }
};
