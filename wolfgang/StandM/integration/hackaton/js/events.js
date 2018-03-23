"use strict"

function choice()
{
  var i = $('button[type="button"][id="execute"]').attr('value');
  console.log("i = " + i);
  var checkedvalue = $('input[type=radio][name=radio]:checked').attr('id');
  test(checkedvalue);
  if (i > 5)
  {
    if (highervalue() == 'A') {
      window.location.replace("php/profil1.php");
    }else if (highervalue() == 'B') {
      window.location.replace("php/profil2.php");
    }else if (highervalue() == 'C') {
      window.location.replace("php/profil3.php");
    }else {
      window.location.replace("php/profil4.php");
    }
    localStorage.clear();
    return;
  }
  $.get("php/question" + i + ".php" , callbackquestion);
  i++;
  $("#execute").attr("value", i);
}
