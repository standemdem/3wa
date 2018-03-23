"use strict";



/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
var elmt;
var compteur;

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function imgSelected(){
  this.classList.toggle("selected");
  compteur = document.querySelectorAll(".selected").length;
  document.getElementById("count").innerHTML = compteur;
}


/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
elmt = document.querySelectorAll("img") ;

for (var i = 0; i < elmt.length; i++){
  elmt[i].addEventListener("click", imgSelected);
  }

/*//CORRECTION

var images;
var compteur = document.getElementById("compteur");
var nombre;

function selection(){
	this.classList.toggle("selected");
  nombre = document.querySelectorAll(".selected").length;
  compteur.innerHTML = nombre;
}

//
images = document.querySelectorAll("img");
for(var i = 0; i < images.length; i++){
	images[i].addEventListener("click", selection);
}

querySelector: selectionne 1  elem
querySelectorAll: selectionne tous les elems répondant au selecteur
getElementById: selectionne 1 elem ayant l'id souhaité
getElementByClassName: idem pour une classe
getElementsByClassName: idem que ci dessus , mais prendra tous les éléments
getElementsByTagName: selectionne tous les éléments ayant la balise appelée -> crée un tableau 
*/
