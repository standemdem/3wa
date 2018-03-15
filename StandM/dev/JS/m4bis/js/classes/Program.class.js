"use strict";


var App = function(){
  this.pen = new Pen(); /*on créé un feutre*/
  this.board = new Board(this.pen); //on crée un tableau
  $(document).on('click', '.color', this.OnClickPenColor.bind(this));
  $(document).on('click', '.size', this.OnClickPenWidth.bind(this));
};

App.prototype.OnClickPenColor = function(event){
  var color = $(event.currentTarget).data('color');
  this.pen.setColor(color);
  console.log(color);
};

App.prototype.OnClickPenWidth = function(event){
  var width = $(event.currentTarget).data('size');
  this.pen.setWidth(width);
  console.log(width);
};

App.prototype.start = function(){
  $('.color').each(function(){
    var color = $(this).data('color');
    $(this).css('background', color);
  });
  $('.size').each(function(){
    var width = $(this).data('size');
    $(this).css('font-size',width);
  });
  var board = this.board;
  var pen = this.pen;
  socket.on('newLine', function(data){
    board.context.beginPath();
    board.context.moveTo(data.current.x, data.current.y);
    board.context.lineTo(data.line.x, data.line.y);
    board.context.stroke();
    pen.setColor(data.pen.color);
    pen.setWidth(data.pen.width);
    pen.configure(board.context);
  })
};
