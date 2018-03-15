<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>
    <?php
      if(isset($_GET['error'])){
        switch ($_GET['error']) {
          case 1:
            echo 'Veuillez remplir tous les champs !!!';
            break;
          case 2:
            echo "Qui es-tu ?";
            break;
          case 3:
            echo "Le mot de passe n'est pas correct!!!!!!!!!!!!!";
            break;
        }
      }
    ?>
    <form action="connexion_action.php" method="POST">
      <div>
        Email : <input type="text" name="email" />
      </div>
      <div>
        Password : <input type="password" name="password" />
      </div>
      <button type="submit">Se connecter</button>
    </form>
  </body>
</html>
