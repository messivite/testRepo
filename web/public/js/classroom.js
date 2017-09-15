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

    console.log(data.studentId);
    var el = document.getElementById("ogrenci-"+data.studentId)
    el.classList.add("helpme");
};

conn.onerror = function(e){
    alert("Error: something went wrong with the socket.");
    console.error(e);
};
// END SOCKET CONFIG




// Mini API to send a message with the socket and append a message in a UL element.
var Chat = {
    appendMessage: function(username,message){
        var from;

        if(username == clientInformation.username){
            from = "me";
        }else{
            from = clientInformation.username;
        }

        console.log(message)
        // Append List Item

        var ul = document.getElementById("chat-list");
        var li = document.createElement("li");
        console.log(from); //subscribe user id
        li.appendChild(document.createTextNode(message));
        ul.appendChild(li);
    },
    sendMessage: function(text){
        clientInformation.message = text;
        // Send info as JSON
        conn.send(JSON.stringify(clientInformation));
        // Add my own message to the list
        this.appendMessage(clientInformation.username, clientInformation.message);
    }
};
