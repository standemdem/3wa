<?php
session_start();

if(empty($_POST['email'])
|| empty($_POST['password'])){
  header('Location: connexion.php?error=1');
  exit();
}

$db = new PDO('mysql:dbname=3waco;host=localhost','root','root');

$req = $db->prepare('SELECT * FROM users WHERE email = :email');
$req->execute([
  'email' => $_POST['email']
]);
$user = $req->fetch();

if(empty($user)){
  header('Location: connexion.php?error=2');
  exit();
}

if(!password_verify($_POST['password'], $user['password'])){
  header('Location: connexion.php?error=3');
  exit();
}

$_SESSION['user'] = $user;
header('Location: edition.php');
exit();

?>
