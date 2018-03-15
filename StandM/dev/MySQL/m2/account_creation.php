<?php

$username = "root";
$password = "troiswa";



try {
    $db = new PDO('mysql:host=localhost;dbname=connexion', $username, $password);

    if (isset($_POST['email']) && isset($_POST['password1']) && $_POST['password1'] == $_POST['password2']){

        $email = $_POST['email'];
        $password1 = password_hash($_POST['password1'], PASSWORD_DEFAULT);
        $insert = $db->prepare("INSERT INTO `data` (email, password) VALUES (:email, :password)"
      );
        $insert->bindParam (':email',$email);
        $insert->bindParam (':password',$password1);
        $insert->execute();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        header('location: session.php');
        exit();
      }
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<?php
if(isset($_POST) || !empty($_POST)){
  header('location: ')
}



 ?>
