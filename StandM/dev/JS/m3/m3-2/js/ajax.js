'use strict';
function callback1(reponse){
  $(".container").html(reponse);
};
function callback2(reponse){
  reponse = JSON.parse(reponse);
  console.log(reponse.length);
  $(".container").html(" ");
  for (var i = 0; i < reponse.length; i++) {
    $(".container").append("<p>prénom:" + reponse[i].prenom + "<br/>Téléphone: " + reponse[i].telephone + "</p>");
  }
};
function callgif(reponse){
  $(".container").html("<img class='gif' src='"+reponse.data[Math.floor(Math.random()*25)].images.downsized.url+"' />");
  console.log(reponse);
};
