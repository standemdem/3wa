<?php include("../logic/edit_post_logic.php") ?>
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
	<link rel="stylesheet" href="../assets/normalize.css" />
	<link rel="stylesheet" href="../assets/style.css" />
	<title>Commentaires - Encore un Blog</title>
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="index.php"><i class="fas fa-microphone"></i> Encore un Blog ?! #nonMaisAllo</a></h1>
      <a href="../views/admin.php"><i class="fas fa-cogs"></i>Administration</a>
    </div>
  </header>
  <main class="container">
    <h2><i class="fas fa-comments"></i>Editer un article</h2>

    <div class="article_container">
      <form method="POST" action="../logic/edit_post_logic.php?id=<?php echo $_GET["id"]; ?>">
        <fieldset>
          <legend><i class="far fa-edit"></i>Article</legend>
          <label>Titre:</label>
          <input type="text" name="title" value="<?php echo $post_item['title'] ?>"/>
          <label>Article:</label>
          <textarea rows="20" cols="60" type="text" name="content"><?php echo $post_item['content'] ?></textarea>
          <div>
            <button type="submit">Mettre à jour</button>
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
