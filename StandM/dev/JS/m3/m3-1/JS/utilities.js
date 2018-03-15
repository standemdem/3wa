"use strict";
//Convertir la "value" en JSON etla stocker dans localstorage avec la clé "key"
function storeData(key,value){
  valueJS=JSON.stringify(value);
  localStorage.setItem(key,valueJS);
}
//recuper les donnnées JSON , et les reconvertir
function getData(key){
  data = localStorage.getItem(key);
  data = JSON.parse(data);
  return data;
}
function keepLoad(){ //recharge le contenu choisi
  location.reload();
}
