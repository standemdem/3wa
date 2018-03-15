"use strict";
//verifie que tous les éléments de la page sont biens chargés
$(function(){
  displayContact();
  $(document).on("click","#toggle", displayForm);
  $(document).on("click","#remove_all", deleteAll);
  $(document).on("click","li",hideForm);
  $(document).on("click","li",displayEdit);
  $(document).on("click","li",editedContact);
  //$(document).on("click","li",testindex);
  $(document).on("click","#update",onEdition);
  $(document).on("click","#register", onSave);
});
