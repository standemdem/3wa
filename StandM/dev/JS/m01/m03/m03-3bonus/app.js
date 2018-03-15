"use strict";

while (isNaN(longueur)){
    var longueur = parseInt(prompt("rentrez la longueur de la table de multiplication"));
}

var result;
var random;
var random2;
var test;





document.write("<p class='slipenbois'>Table de multiplication super sexy topichouffe</p>")
document.write("<table>");

for (var x = 1; x <= longueur; x++){
    document.write("<tr>");
    for (var y = 1 ; y <= longueur; y++){
        random = parseInt(Math.floor(Math.random()*7));
        random2 = parseInt(Math.floor(Math.random()*7));
        result = x * y;

        if (x == y) {
        document.write("<td class ='color'>");
        }
        else {
        document.write("<td>");
        }
        if (random == random2){
          document.write("<input type="text"></input>");
        }
        else{
          document.write(result);
        }
        document.write("</td>");
      }
      document.write("</tr>");
  }
document.write("<table>");
