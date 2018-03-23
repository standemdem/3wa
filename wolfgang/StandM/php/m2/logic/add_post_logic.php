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
  //recuperer les id des auteurs
$get_a = $db->prepare("SELECT *
FROM `authors` ");
$get_a->execute();
$authors = $get_a->fetchAll();

//recuperer les id des categories
$get_c = $db->prepare("SELECT *
FROM `categories` ");
$get_c->execute();
$categories = $get_c->fetchAll();

//envoi vers mysql des articles dans la table post
if(!empty($_POST)){
$req = $db->prepare('INSERT INTO posts (title, content, `date`, author_id, category_id)
  VALUES (:title, :content, NOW(), :author_id, :category_id)');
$req->execute([
  "title"       =>$_POST["title"],
  "content"     =>$_POST["content"],
  "author_id"   =>$_POST["author_id"],
  "category_id" =>$_POST["category_id"]
]);
header ("location: ../views/index.php");
}
//
 ?>
