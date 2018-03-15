"use strict";

var Board = function(pen){

  this.canvas= $('#tableau')[0];
  this.context = this.canvas.getContext('2d');
  this.currentLocation = null;
  this.isDrawing= false;
  this.pen = pen;
  $(document).on("mousedown",this.canvas,this.onMouseDown.bind(this));
  $(document).on("mouseup",this.canvas,this.onMouseUp.bind(this));
  $("#tableau").on("mousemove",this.canvas,this.onMouseMove.bind(this));
  $("#tableau").on("mouseleave",this.canvas,this.onMouseLeave).bind(this);
  $("#clear").on("click",this.canvas,this.clear.bind(this));
  $("#tableau").on("mousemove",this.canvas,this.getMouseLocation.bind(this));
};

Board.prototype.onMouseDown = function(event){
  console.log("down");
  this.isDrawing = true;
  this.curPos = this.getMouseLocation(event);
  console.log(this.curPos);
  this.pen.configure(this.context);
}

Board.prototype.onMouseUp = function(){
  console.log("up");
  this.isDrawing = false;
}

Board.prototype.onMouseMove = function(event){
  var location = this.getMouseLocation(event);
  if(this.isDrawing == true){
    // this.context.strokeStyle = "red";
    this.context.beginPath();
    this.context.moveTo(this.curPos.x, this.curPos.y);
    this.context.lineTo(location.x, location.y);
    this.context.stroke();
    this.curPos = location;
  }
}

Board.prototype.onMouseLeave = function(){
  console.log("leave");
  this.isDrawing = false;
}

Board.prototype.getMouseLocation = function(event){

  var canvasPos = this.canvas.getBoundingClientRect();
  var x = event.clientX - canvasPos.left;
  var y = event.clientY - canvasPos.top;

  return {
    x: event.clientX - canvasPos.left,
    y: event.clientY - canvasPos.top
  }
}
Board.prototype.clear = function(event){
  console.log("clear");
  this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
}
