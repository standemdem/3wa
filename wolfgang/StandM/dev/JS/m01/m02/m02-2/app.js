"use strict";


//CREATION D'UNE CALCULATRICE CLASSIQUE

var number1 = (parseFloat(prompt("rentrer un premier nombre")));

while (isNaN(number1)) {
  alert("merci de rentrer un nombre valide");
  number1 = (parseFloat(prompt("rentrer un premier nombre")));
  }
var number2 = (parseFloat(prompt("rentrer un second nombre")));

while (isNaN(number2)) {
  alert("merci de rentrer un nombre valide");
  number2 = (parseFloat(prompt("rentrer un second nombre")));
}

var operator = prompt("pick an operator");

var result;
//Metode1
/*
if (operator == "+" || operator == "addition")
  {
    result = (number1 + number2);
  }
else if (operator == "-" || operator == "soustraction")
  {
    result = (number1 - number2);
  }
else if (operator == "*" || operator == "multiplication")
  {
    result = (number1 * number2);
  }
else if (operator == "/" || operator == "division")
  {
    result = (number1 / number2);
  }
else if (operator == "^" || operator == "puissance")
  {
    result = Math.pow(number1, number2);
  }

  document.write("le résultat est " + result);
*/

//Method 2
switch (operator){
  case "+":
  case "plus":
    result = (number1 + number2);
    break;
  case "-":
  case "moins":
    result = (number1 - number2);
    break;
  case "/":
  case "division":
    result = (number1 / number2);
    break;
  case "^":
  case "puissance":
    result = Math.pow(number1, number2);
    break;
}
document.write("le résultat est " + result);
