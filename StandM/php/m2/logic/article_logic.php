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

$post_infos =$db->prepare("SELECT *
  FROM `posts`
  INNER JOIN `authors`
  ON `posts`.`author_id` = `authors`.`id`
  WHERE posts.id = :id
  ");

$post_infos->execute([
  "id" => $_GET["id"]
]);
$info = $post_infos->fetch();

?>
