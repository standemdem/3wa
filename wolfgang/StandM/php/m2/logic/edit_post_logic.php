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

/*RECUPERATION DU TITRE ET CONTENU ARTICLE*/
$post_items = $db->prepare("SELECT title, content
  FROM `posts`
  WHERE `id` = :article_id "
);
$post_items->execute([
  "article_id"  => $_GET["id"]
]);
$post_item = $post_items->fetch();

/*UPDATE DANS LA BDD*/
if(!empty($_POST)){
  $get_items = $db->prepare("UPDATE `posts`
    SET `title`= :title,`content`= :content
    WHERE id = :article_id
   ");
  $get_items->execute([
    "title" => $_POST["title"],
    "content" => $_POST["content"],
    "article_id" => $_GET["id"]
  ]);
  header("location: http://localhost/StandM/php/m2/views/admin.php");
}


?>
