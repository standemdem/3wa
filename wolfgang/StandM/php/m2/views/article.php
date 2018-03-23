<?php include("../logic/article_logic.php")  ?>
<?php include("../logic/add_comment.php")  ?>
<?php
session_start();

if(empty($_SESSION['user'])){
  header('Location: ../views/connexion.php');
  exit();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',
                        branding: false
});</script>
	<link rel="stylesheet" href="../assets/normalize.css" />
	<link rel="stylesheet" href="../assets/style.css" />
	<title>Commentaires - Encore un Blog</title>
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="index.php"><i class="fas fa-microphone"></i> Encore un Blog ?! #nonMaisAllo</a></h1>
      <a href="../views/admin.php"><i class="fas fa-cogs"></i>Administration</a>
      <a href="../logic/disconnexion_action.php"><i class="fas fa-bed"></i>Déconnexion</a>
    </div>
  </header>
  <main class="container">
    <h2><i class="fas fa-comments"></i>Commentaires</h2>

    <div class="article_container">
      <h3><?php echo htmlspecialchars($info["title"]); ?></h3>
      <p><?php echo htmlspecialchars($info["content"]); ?></p>
      <p>Rédigé par <?php echo htmlspecialchars($info['first_name']) . " " . htmlspecialchars($info['last_name'])?> le <?php echo htmlspecialchars($info['date']) ?></p>

			<hr />
      <?php foreach ($comment as $value):?>
        <p><i class="fas fa-comment"></i> Rédigé par <?php echo htmlspecialchars($value["username"]) ?></p>
        <p><?php echo $value["content"] ?></p>
      <?php endforeach ?>
      <hr />

      <form method="POST" action="../logic/add_comment.php?id=<?php echo $_GET["id"]; ?>">
        <fieldset>
          <legend><i class="far fa-comment"></i>Nouveau commentaire</legend>
          <label>Pseudo</label>
          <input type="text" name="username"/>
          <label>Commentaire</label>
          <textarea rows="20" cols="60" type="text" name="content"></textarea>
          <div>
            <button type="submit">Enregistrer</button>
            <button type="submit">Supprimer</button>
          </div>
        </fieldset>
      </form>
    </div>

  </main>
  <footer class="container">
      <small >Le blog des élèves de la 3w Academy</small>
  </footer>

</body>
</html>
