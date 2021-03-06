var express = require('express');
var app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http);


app.use(express.static(__dirname + '/'));
app.get('/', function(req, res){
  res.sendFile(__dirname + '/index.html');
});

io.sockets.on('connection', function(socket){
  // console.log('a user connected');
  socket.on('disconnect', function(){
    // console.log('user disconnected');
  });
  socket.on('newLine',function(newLine){
    console.log(newLine);
    io.sockets.emit('newLine', newLine);
  });

});



http.listen(3000, function(){
  console.log('listening on *:3000');
});
