<?php

$username = "root";
$password = "troiswa";

try {
    $db = new PDO('mysql:host=localhost;dbname=blog2', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    die();
    }

/*RECUPERE LES INFOS A AFFICHER SUR LA PAGE*/
$get_articles =$db->prepare("SELECT `posts`.id, `title`,`content`,`author_id`,`authors`.`first_name`,`authors`.`last_name`, `categories`.`name`
FROM `posts`
INNER JOIN `authors`
ON `posts`.`author_id` = `authors`.`id`
INNER JOIN `categories`
ON `posts`.`category_id` = `categories`.`id`
");
$get_articles->execute();
$articles = $get_articles->fetchAll();

/*Récupère le nom de l'utilisateur de la session*/
$get_names =$db->prepare(
  "SELECT first_name, id
  FROM data
  WHERE id = :name_id
  ");
$get_names->execute([
  "name_id" => $_GET["id"]
]);

$names = $get_names->fetch();
var_dump($names);
?>
