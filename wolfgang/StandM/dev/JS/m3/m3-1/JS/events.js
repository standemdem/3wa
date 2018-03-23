"use strict";
function onSave(){
  createContact();
  displayContact();
}

function onEdition(){
  contacts = getData("contacts");
  var updatedContact = {
    nom       :$("#lastNameU").val(),
    prenom    :$("#firstNameU").val(),
    numero    :$("#phoneU").val(),
    civilite  :$("#titleU").val()
  }
    var index = $("#update").attr("data-index");
    contacts[index]["nom"] = updatedContact["nom"];
    contacts[index]["prenom"] = updatedContact["prenom"];
    contacts[index]["numero"] = updatedContact["numero"];
    contacts[index]["civilite"] = updatedContact["civilite"];
    storeData("contacts",contacts);
    displayContact();
}

function deleteAll(){
  $("ul li").remove();
  contacts = [];
  storeData("contacts",contacts);
}

function displayForm(){
  $(".add_container").toggle();
}
function hideForm(){
  $(".add_container").hide();
}
function displayEdit(){
  $(".modify_container").show();
}

function testindex(){
  var x = $(this).index()
  console.log(x);
}
