<?php
$word = strtolower($_POST["wordToTrans"]);
$choice = $_POST["choice"];
$tableau=[
  "chien"         => "dog",
  "chat"          => "cat",
  "souris"        => "mouse",
  "entre un mot"  => "enter a sentence"
];


$sautdeligne ="<br/><br/>";
echo $sautdeligne;


if(isset($word)){
if (array_key_exists($word, $tableau)){
  if($choice == "frToEngl"){
    $trans = $tableau[$word];
  }
}
elseif(in_array($word, $tableau)){
  if($choice == "englToFr"){
    $trans = array_search($word, $tableau);
  }
}
else{
echo "Bonjour,rentrez un mot à traduire";
}
echo $trans;
}

 ?>
