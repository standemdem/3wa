<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="../assets/normalize.css" />
	<link rel="stylesheet" href="../assets/style.css" />
	<title>Connexion</title>
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="index.php"><i class="fas fa-microphone"></i> Encore un Blog ?! #nonMaisAllo</a></h1>
      <a href="../views/admin.php"><i class="fas fa-cogs"></i>Administration</a>
    </div>
  </header>
  <main class="container">
    <h2><i class="fas fa-sign-in-alt"></i>Connexion</h2>
    <div class="article_container">
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
      <form action="../logic/connexion_action.php" method="POST" >
        <fieldset>
          <legend><i class="far fa-comment"></i>Mes infos de connexion</legend>
          <label>Email</label>
          <input type="email" name="email"/>
          <label>Mot de passe</label>
          <input type="password" name="password">
          <div>
            <button type="submit">Se connecter</button>
            <button type="submit"><a href="index.php">Annuler</a></button>
          </div>
        </fieldset>
      </form>
    </div>
		<div>
			<a href="inscription.php">Je souhaite m'inscrire</a>
		</div>
  </main>
  <footer class="container">
      <small >Le blog des élèves de la 3w Academy</small>
  </footer>

</body>
</html>
