<?php
if(empty($_POST['first_name'])
|| empty($_POST['last_name'])
|| empty($_POST['email'])
|| empty($_POST['password'])
|| empty($_POST['password_confirm'])){
  header('Location: inscription.php?error=1');
  exit();
}

if($_POST['password'] != $_POST['password_confirm']){
  header('Location: inscription.php?error=2');
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

$req = $db->prepare('INSERT INTO data (first_name, last_name, email, password) VALUES(:first_name,:last_name,:email, :password)');
$req->execute([
  'first_name' => $_POST['first_name'],
  'last_name' => $_POST["last_name"],
  'email' => $_POST['email'],
  'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
]);

header('Location: ../views/connexion.php');
exit();
?>
