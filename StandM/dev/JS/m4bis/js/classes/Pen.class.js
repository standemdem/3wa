"use strict";




var Pen = function(){
  this.color = 'black';
  this.width = 1;
}


//Fonction permettant de configurer le canvas en fonction des propriétés du feutre
Pen.prototype.setColor = function(color){
  this.color = color;
}

Pen.prototype.setWidth = function(width){
  this.width = width;
}
Pen.prototype.configure = function(canvasContext) {

  canvasContext.strokeStyle = this.color; //couleur
  canvasContext.lineWidth = this.width;//epaisseur
}
// var Pen1 =new Pen(){
//   Pen1.color = $('.color').on("click", function(){
//     $("")})
// }
