<html>
<script type="text/javascript">
//This will open the connection*
ws = new WebSocket("ws://localhost:25003/ws"); 
        
// Then you can send a message
ws.onopen = function () {
connection.send("Ping");
};
        
//Log the messages that are returned from the server
ws.onmessage = function (e) {
console.log("From Server:"+ e.data);
};
        
//Sending a simple string message
ws.send("HelloHelloIsThereAnyoneThere");

        
//Close the connection
ws.close() 
</script>
<body>
Hi</body>
</html>