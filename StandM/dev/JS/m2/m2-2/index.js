"use strict";

//DECLARATION VARIABLE
var button = document.getElementById("toggle-rectangle");
var elmt = document.querySelector(".rectangle");

//CREATION DES FONCTIONS
function butclick(){
  elmt.classList.toggle("hide");
}

function mouseO() {
  this.classList.add("important");
}
function mouseL() {
  this.classList.remove("important", "good");
}

function doublclick(){
  this.classList.add("good");
  this.classList.remove("important");
}
//CODE
elmt.addEventListener("mouseover", mouseO);
elmt.addEventListener("mouseleave", mouseL);
button.addEventListener("click", butclick);
elmt.addEventListener("dblclick", doublclick);
