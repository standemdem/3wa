<?php include 'sqlConnexion.php';?>
<?php include 'account_creation.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css" />
	<title>mysql - CREATE</title>
</head>
<body>
  <div>
    <h1>Hello World</h1>
    <form method="POST">


      <fieldset>
        <legend>Creation de compte</legend>
        <input type="email" name="email" id="inputEmail" placeholder="email" required/><br />
        <input type="password" name="password1" id="inputPassword" placeholder="mot de passe" required/><br />
        <input type="password" name="password2" placeholder="confirmation mot de passe" required/><br />
        <button type="submit" />Creer le compte</button>

      </fieldset>
    </form>
    <a href="index.php"><p>Vous avez déjà un compte ? cliquez ici pour vous connecter</p></a>
  </div>
</body>
</html>

<?php



 ?>
