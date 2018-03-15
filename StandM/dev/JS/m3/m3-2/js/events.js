'use strict';

function radio(){
  var button = $("input[name=choice]:checked").val();
  switch (button) {
    case 'html':
      $.get("php/article.php", callback1);
      break;
      console.log(button);
    case 'json':
      $.get("php/contacts.php", callback2);
      break;
    case 'html2':
      $.get("php/films.php", callback1);
      break;
    case 'gif':
    var texte = $("#search").val();
    console.log(texte);
    $.get("http://api.giphy.com/v1/gifs/search?q="+texte+"&api_key=cmqjz9ZKO5TtQZ9VG9YnFRHTzUaVHb72&limit=25", callgif);
      break;
    default:
      alert("veuillez faire un choix");
  }
}

function showarea(){
  $("#search").show();
}
