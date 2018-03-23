"user strict";

//*************************VARIABLES********************************
var next = document.getElementById("slider-next");
var back = document.getElementById("slider-previous");
var play = document.getElementById("slider-toggle");
var indexRandom = document.getElementById("slider-random");
var cercle = document.getElementsByClassName("circle");
var boutton = document.getElementById("toolbar_toggle");
var text = document.getElementById("title");
var slider= {};
  slider.state = {};
slider.state.indexImg = 1;
slider.state.indexInterval = undefined;

slider.images = [
  {
    chemin : "./images/1.jpg",
    titre : "street art"
  },
  {
    chemin : "./images/2.jpg",
    titre : "road"
  },
  {
    chemin : "./images/3.jpg",
    titre : "architecture building"
  },
  {
    chemin : "./images/4.jpg",
    titre : "skyscraper"
  },
  {
    chemin : "./images/5.jpg",
    titre : "urban life"
  },
  {
    chemin : "./images/6.jpg",
    titre : "eiffel tower"
  }
];
//***********************FONCTIONS*****************************

//CACHE LA BARRE DE NAV
slider.buttonHide = function (){
  document.querySelector(".toolbar").classList.toggle("button_display");
}

 //AVANCE DANS LE SLIDER
slider.forward = function(){
  if (slider.state.indexImg < 6){
    slider.state.indexImg++;
    console.log(slider.state.indexImg);
  }
  else {
    slider.state.indexImg = 1;
    console.log(slider.state.indexImg);
  }
  x = slider.newTitle(slider.state.indexImg);
}

//RECULE DANS LE SLIDER
slider.backward = function(){
  if (slider.state.indexImg > 1){
    slider.state.indexImg--;
    console.log(slider.state.indexImg);
  }
  else {
    slider.state.indexImg = 6;
    console.log(slider.state.indexImg);
  }
  x = slider.newTitle(slider.state.indexImg);
}

// CHANGE l'ATTRIBUT DE LA VARIABLE (rendu obsolete par function title)
/*function changeElement(){
  var x = document.getElementsByTagName("img")[0].setAttribute("src", "images/" + indexImg + ".jpg");
}*/

 //LANCE L'AUTOPLAY
slider.autoplay = function(){
  if(slider.state.indexInterval == undefined){
    slider.state.indexInterval = window.setInterval(slider.forward, 2000);
  }
  else{
    slider.state.indexInterval = window.clearInterval(slider.state.indexInterval);
  }
}

//CHOISI UNe PHOTO  AU HASARD
slider.randomize = function(){
  indexRandom = parseInt(slider.getRandomArbitrary(1,7));
  slider.state.indexImg = indexRandom;
  slider.newTitle(slider.state.indexImg);
  console.log(indexRandom);
}

// CHOISI UN NOMBRE ALEATOIRE
slider.getRandomArbitrary = function(min, max) {
  return Math.random() * (max - min) + min;
}

//AJOUTE UN TITRE CORRESPONDANT à L'INDEX
slider.newTitle = function(){
  var j = slider.state.indexImg - 1;
  text.innerHTML = slider.images[j].titre;
  var newChemin = slider.images[j].chemin;
  var x = document.getElementsByTagName("img")[0].setAttribute("src", newChemin);
  console.log(text.innerHTML);
}
//CHANGE LA CLASSE DES BOUTONS SOUS PHOTO

slider.buttonChange = function(){
  for (l = 1; l < position.length; l++){
    if(l != position.indexOf(this)){
        position.classList.remove("testclick");
    }
    else{
        this.classList.toggle("testclick");
    }
  }
}
//***********************CODE*****************************

boutton.addEventListener("click", slider.buttonHide);
next.addEventListener("click", slider.forward);
back.addEventListener("click", slider.backward);
play.addEventListener("click", slider.autoplay);
indexRandom.addEventListener("click", slider.randomize);


//ASSOCIE UNE TOUCHE A UNE FONCTION
document.addEventListener("keydown",function(event){
  const nomTouche = event.keyCode;
  switch (event.keyCode) {
    case 37:
      slider.backward();
      break;
    case 39:
      slider.forward();
      break;
    case 32:
      slider.autoplay();
      break;
    default:
  }
})

// AJOUTE UN BOUTON DE NAVIGATION SOUS LA PHOTO

  for (var k = 0; k < slider.images.length; k++){
    var a = document.createElement("a");
    document.querySelector(".bullet_container").appendChild(a);
    a.innerHTML = "<div class='circle'></div>";
}
console.log(slider.images.length);

//SELECTION LA POSITION D'UN ELEMENT PAR RAPPORT A SON PARENT + CHANGE LA CLASSE DU BOUTON AU CLICK

slider.buttonPosition = function(){
  var position;
  position = Array.from(links).indexOf(this);
  slider.state.indexImg = position + 1;
  slider.newTitle(slider.state.indexImg);
  for (i = 0; i < links.length; i++){
    links[i].classList.remove("testclick");
  }
  this.classList.add("testclick");
}
//AJOUTE UN EVENTLISTENER A TOUS MES ELEMENTS DE CLASSE CIRCLE
var links = document.querySelectorAll(".circle");
for (var i = 0; i < links.length; i++){
  links[i].addEventListener("click", slider.buttonPosition);
}
