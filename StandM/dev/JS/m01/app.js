

"use strict";
/*HELLO WORLD
document.write("test");
console.log('hello world');
/* AFFICHER SON NOM DANS LA CONSOLE
var prenom;
prenom = "Stan le magnifique";
console.log(prenom);
var pseudo ="Stoun";
console.log(pseudo);
/* Variables et Constances
const TAUX = 20;
console.log(TAUX);

var taux10 = TAUX + 10;
console.log(taux10);
/* CONCATENATION
taux10++;
console.log("taux10 = " + taux10);
taux10--;
console.log("Taux10 = " + taux10);
taux10 = taux10 / 10;
console.log("Taux10 = " + taux10);
taux10 = taux10 * 5;
console.log("Taux10 = " + taux10);
/* WINDOW PROMPT
var prenom = prompt("quel est votre prénom préféré?");
console.log(prenom);

var message = "Bienvenue " + prenom;
document.write(message);

var chiffre1 = prompt('rentrer un premier chiffre');
var chiffre2 = prompt('rentrer un deuxieme chiffre');

/* TYPES ET CONVERSIONS
var calculatrice = parseInt(chiffre1) + parseInt(chiffre2);
document.write("la somme des deux chiffres est égale à " + calculatrice);

test2 = 4;
console.log(test2);


/* CALCULATRICE TVA
var ht;
const TAUX;
var tva;
var ttc;

ht = parseFloat(prompt("rentrer le montant Hors Taxe"));
TAUX = parseFloat(prompt("rentrer le taux de TVA"));
tva = parseFloat(ht * TAUX / 100);
ttc = ht + tva;

document.write("<p>Montant hors taxe = " + ht + '</p>');
document.write("<p>La TVA est de " + TAUX + "%" + '</p>');
document.write("<p>Montant de TVA = " + tva + '</p>');
document.write("<p>Montant TTC = " + ttc + '</p>');
/* TABLEAUX */

/*Creer un tableau qui declare les jours de la semaine

var tab_jour = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi","dimanche"];
var tab_mois = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre","decembre"];
/*var i = parseInt(prompt("entrez un chiffre entre 0 et 6"));*/
/*var i = 4;
var j;
j = tab[i];
document.write(j);

/* creer un tableau qui donne la date du jour
var date;
var jour;
var mois;
var index;
var month;
var year;
var day;
var hour;
var minute;
var second;

var tab = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
var tab2 = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre","decembre"];

date = new Date();
index = tab[date.getDay()];
day = date.getDate();
month = tab2[date.getMonth()];
year = date.getFullYear();
hour = date.getHours();
minute = date.getMinutes();
second = date.getSeconds();


console.log(jour);
console.log(date);

document.write("Nous sommes le " + index + " " + day + " " + month + " "  + year);
document.write("il est exactement " + hour + " " + minute + " " + second);

OBJET VOITURE */
var date;

var obj = {
  marque : "Volvo",
  fabrication : "1983",
  achat : date = new Date(),
  passagers : ["patrick", "henri", "susie"]
}

document.write("<ul><li>" + "marque " + obj.marque + "</li>" + "<li>" + obj.fabrication + "</li>" + "<li>" + obj.achat + "</li>" + "<li>" +"la liste des passagers est la suivante: " + obj.passagers + "</li>" + "</ul>");
