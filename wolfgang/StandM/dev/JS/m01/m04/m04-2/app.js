"use strict";

var niveau ;
var epee ;
var armure;

var damageGamer;
var damageDragon;

var vieJoueur;
var vieDragon;


// FONCTION INITIALISATION DES PARAMETRE NIVEAU EPEE ARMURE VIE

function initialize(){
  niveau = parseInt(prompt("choisissez la difficulté(facile:1 moyen:2 hard:3"));
  epee = parseInt(prompt("choisissez la puissance de l'épée (faible :1 normale :2 resistante :3"));
  armure = parseInt(prompt("choisissez la solidité de l'armure (faible :1 normale :2 resistante :3"));
  vieDragon = 1000;
  vieJoueur = 1000;
}

function random2(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

//CALCUL DAMAGE GAMER renvoie le nombre de pdv a retirer au dragon

function calculDamageGamer(){
  console.log(niveau);
  switch (niveau) {
    case 1:
      damageGamer = random2(90, 100);
    break;
    case 2:
      damageGamer = random2(60, 80);
    break;
    case 3:
      damageGamer = random2(30, 50);
    break;
  }
  damageGamer = parseInt(damageGamer * epee);
  document.write("<p>joueur fait " + damageGamer + " dommages</p>");
  return damageGamer;
}


//CALCUL DAMAGE DRAGONe nvoie le nombre de pdv a retirer au joueur

function calculDamageDragon(){
  switch (niveau) {
    case 1:
      damageDragon = random2(30, 50);
    break;
    case 2:
      damageDragon = random2(60, 80);
    break;
    case 3:
      damageDragon = random2(90, 100);
    break;
  }
  damageDragon = parseInt(damageDragon / armure);
  document.write("<p>Dragon fait " + damageDragon + " dommages</p>");
  return damageDragon;
}

// FONCTION BOUCLE DU COMBAT

function gameloop(){
  while (vieJoueur > 0 && vieDragon > 0){
    var speedGamer = parseInt(Math.floor(Math.random()*7));
    var speedDragon = parseInt(Math.floor(Math.random()*7));
    if (speedGamer > speedDragon){
        vieDragon -= calculDamageGamer();
      }
    else{
        vieJoueur -= calculDamageDragon();
      }
  }
  showWinner();
}

// AFFICHE L'ETAT DU JEU
function showGameState(){
  document.write("<p class='color2'>il reste " + vieDragon + " points de vie au dragon</p>");
  document.write("<p class='color1'>il reste " + vieJoueur + " points de vie au joueur</p>");
}

function showWinner(){
  if (vieDragon < vieJoueur){
    document.write("<p class='color1'>vous êtes victorieux !<p>");
  }
  else {
    document.write("<p class='color2'>le dragon vous a  croqué !</p>");
  }
}


//FUNCTION START GAME

function StartGame(){
  initialize();
  gameloop();
  showGameState();

}
StartGame();
