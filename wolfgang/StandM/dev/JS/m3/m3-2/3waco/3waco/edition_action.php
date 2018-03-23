<?php
session_start();
if(empty($_POST['email'])){
  header('Location: edition.php?error=1');
  exit();
}

$db = new PDO('mysql:dbname=3waco;host=localhost','root','root');

// UPDATE users SET email = :email WHERE id = :id

$req = $db->prepare('UPDATE users SET email = :email WHERE id = :id');
$req->execute([
  'email' => $_POST['email'],
  'id'    => $_SESSION['user']['id']
]);

$_SESSION['user']['email'] = $_POST['email'];

header('Location: edition.php');
exit();

?>
