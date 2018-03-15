<?php include("../logic/index_logic.php")  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="../assets/normalize.css" />
	<link rel="stylesheet" href="../assets/style.css" />
	<title>Encore un blog ?</title>
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="index.php"><i class="fas fa-microphone"></i> Encore un Blog ?! #nonMaisAllo</a></h1>
      <a href="admin.php"><i class="fas fa-cogs"></i>Administration</a>
			<a href="connexion.php"><i class="fas fa-sign-in-alt"></i>connexion</a>

    </div>
  </header>
  <main class="container">
    <h2><i class="fas fa-home"></i>Accueil</h2>
    <div class="article_container">
			<?php foreach ($articles as $value): ?>
				<h3><i class="far fa-hand-point-right"></i><?php echo $value['title'] ?></h3>
				<div class="single_container">
					<p><?php echo $value['content'] ?></p>
					<p>Rédigé par <?php echo $value['first_name'] . " " . $value['last_name']?> le <?php echo $value['date'] ?></p>
				</div>
			<?php endforeach; ?>

    </div>

  </main>
  <footer class="container">
      <small >Le blog des élèves de la 3w Academy</small>
  </footer>

</body>
</html>
