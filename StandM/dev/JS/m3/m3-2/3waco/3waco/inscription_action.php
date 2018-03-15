<?php
if(empty($_POST['email'])
|| empty($_POST['password'])
|| empty($_POST['password_confirm'])){
  header('Location: inscription.php?error=1');
  exit();
}

if($_POST['password'] != $_POST['password_confirm']){
  header('Location: inscription.php?error=2');
  exit();
}

$db = new PDO('mysql:dbname=3waco;host=localhost','root','root');

$req = $db->prepare('INSERT INTO users (email, password) VALUES(:email, :password)');
$req->execute([
  'email' => $_POST['email'],
  'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
]);

header('Location: connexion.php');
exit();
?>
