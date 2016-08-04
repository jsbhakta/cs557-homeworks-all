

// Express initializes app to be a function handler that 
// you can supply to an HTTP server (as seen in line 2).
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);



http.listen(process.env.PORT || 5000, function(){
  console.log('listening on *:5000');
});

app.get('/', function(req, res){
  res.sendFile(__dirname + '/index.html');
});

// In order to send an event to everyone, Socket.IO gives 
// us the io.emit:
// 
//   io.emit('some event', { for: 'everyone' });
// 
// If you want to send a message to everyone except for a 
// certain socket, we have the broadcast flag:
//
//   io.on('connection', function(socket){
//     socket.broadcast.emit('hi');
//   });


io.on('connection', function(socket){
  socket.on('chat message', function(msg){
   socket.broadcast.emit('chat message', msg);
	
  });
});


    
