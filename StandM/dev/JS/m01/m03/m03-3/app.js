"use strict";

while (isNaN(longueur)){
    var longueur = parseInt(prompt("rentrez la longueur de la table de multiplication"));
}

var random;
random = parseInt(Math.floor(Math.random()*4));


document.write("<div>");
document.write("<p class='slipenbois'>Table de multiplication super sexy topichouffe</p>")
document.write("<table>");
for (var x = 1; x <= longueur; x++)
  {
    document.write("<tr>");

    for (var y = 1 ; y <= longueur; y++)
      {
        if (x == y) {
          document.write("<td class ='color'>" + x * y + "</td>");
          }
        else
        {
        document.write("<td>" + x * y + "</td>");
        }
      }
      document.write("</tr>");
  }
document.write("<table>");
document.write("</div>");
