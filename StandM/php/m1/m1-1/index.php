<?php include("./traduction.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>M1-1 PHP</title>
</head>
<body>
  <h1>Traducteur Anglais-Français</h1>
  <form method="post" action="index.php">
    <p>Entrez un mot</p>
    <input type="text" name="wordToTrans" placeholder="Mot à traduire"/>
    <br />
    <select name="choice">
      <option value="frToEngl">Français vers Anglais</option>
      <option value="englToFr">Anglais vers Français</option>
    </select>
    <br />
      <input type="submit" value="Traduire"/>

  </form>
  <script src="./JS/utilities.js"></script>
</body>
</html>
<!--
correction
trad ="";
$word = strtolower($_POST["wordToTrans"]);
$choice = $_POST["choice"];

function traduire($word, $choice){
switch($_POST["direction"])){
  case "toFrench":
    if(in_array($word, $tableau)){
      $trad = array_search($word, $tableau);
    }
    else{
      $error=true;
    }
  break;
  case "toEnglish":
    if(array_key_exists($word, $tableau)){
      $choice = tableau[$word];
    }
    else{
      $error=true;
    }
  break;
}
}

$traduction = traduire($word, $choice, $tableau);
-->
