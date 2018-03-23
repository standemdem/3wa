

function Personnage(prenom) {
  this.nom = '';
  this.prenom = prenom;
  this.parler = function(text) {
    return this.prenom + ' a dit : ' + text ;
  }
  this.show = function() {
    $('section').append('<p>' + this.prenom + '</p>')
  }
}

var perso1 = new Personnage();

perso1.nom = 'el daher';
perso1.prenom = 'Joseph ';
perso1.parler('je ne sais pas');
console.log(perso1.parler('je ne sais pas'));
perso1.show();



var perso2 = new Personnage("hana");
perso2.parler('non plus');
perso2.email = 'kldsgfkgj';
perso2.show();


function Voiture() {
  this.id = $('.voiture').length;
  this.nom = '';
  this.datefab = '';
  this.couleur = '';
  this.show = function() {
    $('section').append('<img id="' + this.id + '" class ="voiture" src="img/téléchargement.jpg" title ="Voiture ' +  this.nom + '   ' + this.datefab + '  ' + this.couleur +  '" /> ');
  }
  this.moveRight = function() {
    $('#'+this.id).animate( {
      marginLeft : '+=150px'
    }, 2000);
  }
}

var renault = new Voiture();
renault.nom = 'Clio';
renault.datefab = '2017 ';
renault.couleur = 'blanche ';
renault.show();
renault.moveRight();
