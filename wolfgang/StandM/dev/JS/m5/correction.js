var Morpion =function(){
  this.cases =document.querySelectorAll('td');

  this.currentShape = 'X';

  this.onClick = function(e){
    e.this.innerHTML = this.currentShape;

    //vérifier si le joueur a gagné

    switch (event.currentTarget.dataset.index) {
      case '0,0':
        var toCheck =  ["1,0", "2,0"];
        var validCases = 0;
        for(var i =0; i<toCheck.length; i++){
          var caseToCheck = document.querySelector('td[data-index='+ toCheck[i] +']');
          if (caseToCheck.innerHTML ==this.currentShape){
            validCases++;
          }
        }
        if(validCases ==toCheck.length)
          alert(this.currentShape+'a gagné')
        break;
      default:

    }

    if(this.currentShape == "X")
      this.currentShape = "0";
    else {
      this.currentShape = "X";
    }
  }


  for (var i = 0; i < this.cases.length; i++) {
    this.cases[i].addEventListener('click', this.onClick.bind(this));

  }
}

var game = new Morpion();
;
