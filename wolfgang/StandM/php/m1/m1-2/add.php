<?php

header("location: http://localhost/StandM/php/m1/m1-2/");
$validate = isset($_POST["submit"]) ? $_POST["submit"] : NULL;
$title = $_POST["title"];
$description = $_POST["textarea"];
$date = $_POST["date"];
$priority = isset($_POST["priority"]) ? $_POST["priority"] : NULL ;



if(!empty($title) && !empty($description) && !empty($date) && !empty($priority)){

  $tab = [
    "title"     => $title,
    "textarea"  => $description,
    "date"      => $date,
    "priority"  => $priority
  ];
}else{
  exit;
}

  $path = 'tasks.csv';
  $delimiteur = ',';
  $fichier_csv = fopen($path, 'a+');
  fputcsv($fichier_csv, $tab, $delimiteur);
  fclose($fichier_csv);

?>
