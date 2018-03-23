"use strict";

var user;
var nb;
var tab;
var computer;

nb = Math.floor(Math.random() * 3); //genere un chiffre entier entre 0 et 2;
tab = ["stone", "paper", "scissor"];
computer = tab[nb];

while (user != tab[0] && user != tab[1] && user != tab[2]){
user = prompt("Pick between stone / paper / scissor").toLowerCase();
  }

switch (user) {
  case "stone":
  if (tab[nb] == tab[0] ){
    document.write("vous êtes EX AEQUO, ordi a joué " + tab[nb]);
  }
  else if (tab[nb] == tab[1]) {
    document.write("la feuille enveloppe la pierre, PERDU, ordi a joué " + tab[nb]);
  }
  else if (tab[nb] == tab[2]){
    document.write(tab[nb] + " break the siccors, you LOSE ");
  }
    break;
  case "paper":
  if (tab[nb] == tab[0]) {
    document.write("la feuille enveloppe la pierre, ordi a joué " + tab[nb] + " you WIN!");
  }
  else if (tab[nb] == tab[1]) {
    document.write("vous êtes EX AEQUO, ordi a joué " + tab[nb]);
  }
  else if (tab[nb] == tab[2]){
    document.write("Siccors cut pupper, you LOOSE, computer played " + tab[nb]);
  }
    break;
  case "scissor":
  if (tab[nb] == tab[0]) {
    document.write("You WIN, ordi a joué " + tab[nb]);
  }
  else if (tab[nb] == tab[1]) {
    document.write("you LOOSE, ordi a joué " + tab[nb]);
  }
  else if (tab[nb] == tab[2]){
    document.write("you are EX AEQUO, ordi a joué " + tab[nb]);
  }
    break;
}

// CORRECTION SHI FU MI

/*
"use strict";

  var choixPossibles = ["pierre", "feuille", "ciseau"]; // 0: pierre / 1: Feuille; 2: ciseau

  var choixUser;

  while(choixUser != "pierre" && choixUser != "feuille" && choixUser != "ciseau"){
    choixUser = prompt("Veuillez choisir Pierre / feuille / ciseau");
    choixUser = choixUser.toLowerCase();
  }

  var alea = Math.floor(Math.random() * 3); // chiffre aléatoire entre 0 et 2

  var choixOrdi = choixPossibles[alea]; // aléatoirement : pierre, feuille ou ciseau

  switch(choixUser){
    case "pierre":
      if(choixOrdi == "pierre"){
        alert("Egalité");
      }else if(choixOrdi == "ciseau"){
        alert("Gagné");
      }else{
        alert("Perdu");
      }
    break;
    case "feuille":
      if(choixOrdi == "pierre"){
        alert("Gagné");
      }else if(choixOrdi == "ciseau"){
        alert("Perdu");
      }else{
        alert("Egalité");
      }
    break;
    case "ciseau":
      if(choixOrdi == "pierre"){
        alert("Perdu");
      }else if(choixOrdi == "ciseau"){
        alert("Egalité");
      }else{
        alert("Gagné");
      }
    break;
  }
*/
