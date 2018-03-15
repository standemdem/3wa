"use strict";

var list=[];
ajouter("cows");
ajouter("milk");
ajouter("butter");
console.log(list);

function ajouter(produit){
  list.push(produit);
}

function supprimer(produit){
  var index = list.indexOf(produit);
  if (index!= -1){
    list.splice(index, 1);
  }
}
supprimer("milk");
console.log(list);

function afficher(){
  document.write(list);
}
afficher(list);

function supprimerTout(x){
  list=[];
}

supprimerTout(list);
console.log(list);
