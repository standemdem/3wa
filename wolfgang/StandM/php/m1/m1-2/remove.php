<?php
header("location: http://localhost/StandM/php/m1/m1-2/");

$path = 'tasks.csv';
$delimiteur = ',';
$tasks = file($path, FILE_IGNORE_NEW_LINES);

$csvDel = array_map('str_getcsv', $tasks);

$delete = $_POST["delete"];
$list = $_POST["list"];

if (null !== $_POST['delete'] && null !== $_POST['list']){
  echo "test";
    foreach ($list as $key => $value){
      unset($csvDel[(int)$value]);
    }
    fclose(fopen('tasks.csv', 'w'));
    $fichier_csv = fopen('tasks.csv', 'r+');

    foreach ($csvDel as $lines){
      fputcsv($fichier_csv, $lines, $delimiteur);
    }
    fclose($fichier_csv);
}
?>
