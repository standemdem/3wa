'use strict';

var game = function (){
  this.tab =[
    [null, null, null],
    [null, null, null],
    [null, null, null],
  ];

this.display=function(){
  var board = document.createElement('table');

  for (var i = 0; i < this.tab.length; i++){
    var row = document.createElement('tr');
    board.appendChild(row);

    for (var j = 0 ; j < this.tab[i].length; j++){
      var cell = document.createElement('td');
      row.appendChild(cell);
      cell.setAttribute("data-index",j);
      cell.addEventListener("click", this.set);
        }
      }
document.getElementById('container').appendChild(board);
  }
this.display();

this.set=function(){

  if (cell.innerHTML !== null) {
			return;
		}
  console.log("test");
}


};
var game1 = new game;
