"use strict";
var articles = document.querySelectorAll('article');
for (var i = 0; i < articles.length; i++) {
  articles[i].classList.add('article');
}

var h1 = document.querySelector('section>h1');
h1.classList.add('h');

document.querySelector("article").addEventListener("click", function( event ) {
    // display the current click count inside the clicked div
    console.log("click count: " + event.detail);

  }, false);
