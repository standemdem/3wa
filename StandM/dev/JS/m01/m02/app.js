//operateurs de comparaison
"use strict";
/*

var test = 10;
console.log(test!=10);

var question = prompt("quel age avez vous?");
var testMajeur = question < 18;
console.log("vous avez " + question + " ans");
console.log("vous êtes mineur" + testMajeur);

var testMajeur =  question > 18;
console.log("vous êtes majeur " + testMajeur);

var testMajeur = question <18 ;
console.log("vous n'êtes pas majeur " + testMajeur);

var testMajeur = question > 18;
console.log("vous n'êtes pas mineur, vous êtes une vieille peau " + testMajeur);

var testMajeur = question == 18;
console.log("bienvenue chez les grand" + testMajeur);

*/
//Utilisation de Else et IF

/*
var age = prompt("quel age avez vous?");
if(age < 18){
  console.log("Vous êtes mineur")
}
else if (age == 18) {
  console.log("bienvenue jeune adulte")
}
else if (age == 31) {
  console.log("Salut Bogoss, tu dois surement être Stanislas !!")
}
else if (age > 18 && age != 31){
  console.log("Tu es vieux")
}

*/
/*
//CALCULATRICE DE TVA AVEC REMISE

var ht;       //montant HT
var htRemise;     //montant HT remisé
var remise;     //pourcentage de remise
var TAUX;       //taux de tva
var tva;        // montant de la tva
var ttc;        // montant TTC
var rep;        // booléen choix d'une remise


ht = parseFloat(prompt("rentrer le montant Hors Taxe")) ;
TAUX = percent(parseFloat(prompt("rentrer le taux de TVA")));
rep = confirm("souhaitez vous une remise");

function percent(x) {       //fonction isNaN
  if (isNaN(x)){
    alert("ceci n'est pas un pourcentage");
  }else{
    return x;
  }
}

if (rep == true)
{
  remise = percent(parseFloat(prompt("Indiquez le montant de la remise")) / 100);
  while (isNaN(remise)){
  remise = percent(parseFloat(prompt("Indiquez le montant de la remise"))/ 100);}
}
else
{
  remise = 0 ;
}

htRemise = ht - (ht * remise);
tva = parseFloat(htRemise * TAUX / 100);
ttc = htRemise + tva;

document.write("<p>Montant hors taxe = " + ht + '</p>');
document.write("<p>Montant hors taxe remisé= " + htRemise + '</p>');
document.write("<p>La TVA est de " + TAUX + "%" + '</p>');
document.write("<p>Montant de TVA = " + tva + '</p>');
document.write("<p>Montant TTC = " + ttc + '</p>');
document.write("<p>La remise est de " + remise * 100 + "% et son montant est égal à " + (ht - htRemise) + " euros");

//CORRECTION CALCULATRICE DE TVA AVEC remise
var TVA = window.prompt("Quel est le montant de la TVA?... ");
tauxTVA = parseFloeat(tauxTVA);
var montantHT = parseFloeat(window.prompt("que est le montant HT"));
var montantTVA;
var montantTTC;
var montantRemise = 0;

var remise = window.prompt("voulez vous une remise? Entrez 'oui' / 'non'");

if (remise = "oui")
{
    remisePourcent = parseFloat(window.prompt ("Entrez un pourcentage de remise"));
    montantRemise = (montantHT * remisePourcent)/100;
    montantHT = montantHT - montantRemise;
}

montantTVA = montantht * TVA / 100;
montantTTC = montantht + montantTVA;

console.log(montantTTC);
*/
