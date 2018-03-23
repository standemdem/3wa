"use strict";
function createContact(){
  var contacts = getData("contacts"); // Récupère la liste des contacts enregistrés
  if(contacts == null){
    contacts = []
    storeData("contacts", contacts);
  }
  var newContact = {
    nom       : $("#lastName").val(),
    prenom    : $("#firstName").val(),
    numero    : $("#phone").val(),
    civilite  : $('#title').val()
  }
  contacts.push(newContact);
  storeData("contacts",contacts);
}

function displayContact(){
  contacts = getData("contacts");
  $("ul li").remove();
  if(contacts){
  for (var i = 0; i < contacts.length; i++){
    $("ul").append("<li>" + contacts[i]["civilite"] + " " + contacts[i]["nom"] +  " " + contacts[i]["prenom"] + " "  + contacts[i]["numero"] + "</li>");
    }
    $("ul li").each(function(n){
      $(this).attr("id", +n);
    });
  }
}

function editedContact(){
  x = $(this).index();
  contacts = getData("contacts");
  console.log(contacts[x]);
  var updatedContact = {
    nom       :$("#lastNameU").val(contacts[x]["nom"]),
    prenom    :$("#firstNameU").val(contacts[x]["prenom"]),
    numero    :$("#phoneU").val(contacts[x]["numero"]),
    civilite  :$("#titleU").val(contacts[x]["civilite"])
  }
  var z = $("#update").attr("data-index",x);
  console.log($("#update").attr("data-index"));
}

function testindex(){
  var x = $(this).index()
  console.log(x);
}
