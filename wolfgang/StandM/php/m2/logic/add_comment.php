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

/*AFFICHAGE DU COMMENTAIRE SUR LA PAGE*/
$get_comments = $db->prepare(
    "SELECT *
    FROM `commentaries`
    WHERE  `article_id` = :id");
$get_comments->execute([
  "id" => $_GET["id"]
]);
$comment = $get_comments->fetchAll();

/*ENVOI DU COMMENTAIRE DANS LA BDD*/
if(!empty($_POST)){
  $req = $db->prepare('INSERT INTO commentaries (`username`, `content`, `article_id`)
VALUES (:username, :content, :article_id)');
  $req->execute([
    "username"    =>$_POST["username"],
    "content"     =>$_POST["content"],
    "article_id"  =>$_GET["id"]

    ]);
header ("location: http://localhost/StandM/php/m2/views/article.php?id=" . $_GET['id']);
  };

?>
