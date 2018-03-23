<?php
session_start();

if(empty($_POST['email'])
|| empty($_POST['password'])){
  header('Location: ../views/connexion.php?error=1');
  exit();
}
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

$req = $db->prepare('SELECT * FROM data WHERE email = :email');
$req->execute([
  'email' => $_POST['email']
]);
$user = $req->fetch();

if(empty($user)){
  header('Location: ../views/connexion.php?error=2');
  exit();
}

if(!password_verify($_POST['password'], $user['password'])){
  header('Location: ../views/connexion.php?error=3');
  exit();
}

$_SESSION['user'] = $user;
header('Location: ../views/admin.php');
exit();

?>
