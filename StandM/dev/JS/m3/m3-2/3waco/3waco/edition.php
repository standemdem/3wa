<?php
session_start();

if(empty($_SESSION['user'])){
  header('Location: connexion.php');
  exit();
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_GET['error'])){
        switch ($_GET['error']) {
          case 1:
            echo 'Veuillez remplir tous les champs !!!';
            break;
        }
      }
    ?>
    <h1>Edition du profil</h1>
    <form class="" action="edition_action.php" method="post">
      <div>
        Email : <input type="text" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
      </div>
      <button type="submit" name="button">Modifier mon profil</button>
    </form>
  </body>
</html>
