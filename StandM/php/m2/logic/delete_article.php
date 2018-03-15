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
/*EFFACE LES INFOS DANS MYSQL*/
$delete_articles= $db->prepare(
  "DELETE
  FROM `posts`
  WHERE posts.id = :article_id"
  );
$delete_articles->execute([
  "article_id" => $_GET["id"]
]);
//$delete_articles->fetch();
header("location: ../views/admin.php");
?>
