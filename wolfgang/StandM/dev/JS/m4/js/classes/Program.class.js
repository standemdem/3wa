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
};
