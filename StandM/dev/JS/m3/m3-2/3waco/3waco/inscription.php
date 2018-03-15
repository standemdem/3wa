<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
    <?php
      if(isset($_GET['error'])){
        switch ($_GET['error']) {
          case 1:
            echo 'Veuillez remplir tous les champs !!!';
            break;
          case 2:
            echo 'Les deux mots de passes ne sont pas identiques !!!!!!!!!!!!';
            break;
        }
      }
    ?>
    <form action="inscription_action.php" method="POST">
      <div>
        Email : <input type="text" name="email" />
      </div>
      <div>
        Password : <input type="password" name="password" />
      </div>
      <div>
        Confirm password : <input type="password" name="password_confirm" />
      </div>
      <button type="submit">S'inscrire</button>
    </form>
  </body>
</html>
