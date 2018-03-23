<?php include 'sqlConnexion.php';?>
<?php include 'account_creation.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css" />
	<title>Module 10 - Portfolio</title>
</head>
<body>
  <div>
    <h1>Hello World</h1>
    <form method="POST">
      <fieldset>
        <legend>connexion</legend>
        <input type="email"  placeholder="email" required/><br />
        <input type="password" placeholder="mot de passe" required/><br />
        <button type="submit" value="connexion" />connexion</button>
      </fieldset>
    </form>
  </div>
  <div>
    <a href="create.php">Vous n'avez pas encore de compte ? cliquez ici!</a>
  </div>
	<script src="app.js"></script>
</body>
</html>
