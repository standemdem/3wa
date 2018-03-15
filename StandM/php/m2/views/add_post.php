<?php include("../logic/add_post_logic.php") ?>
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
	<title>Encore un Blog</title>
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="index.php"><i class="fas fa-microphone"></i> Encore un Blog ?! #nonMaisAllo</a></h1>
      <a href="admin.php"><i class="fas fa-cogs"></i>Administration</a>
      <a href="../logic/disconnexion_action.php"><i class="fas fa-bed"></i>Déconnexion</a>
    </div>
  </header>
  <main class="container">
    <h2><i class="fas fa-pencil-alt"></i>Rédiger un nouvel article</h2>
    <div class="article_container">
        <form method="POST" action="../logic/add_post_logic.php">
          <fieldset>
            <legend><i class="fas fa-file"></i>Nouvel article</legend>
            <label>Titre :</label>
            <input type="text" name="title" />
            <label>article</label>
            <textarea rows="20" cols="60" name="content"></textarea>
            <label>Auteur:</label>
            <select name="author_id">
              <?php foreach ($authors as $author):?>
                <option value="<?php echo $author['id']; ?>"><?php echo htmlspecialchars($author['first_name']) . ' ' . htmlspecialchars($author['last_name']) ?></option>
              <?php endforeach; ?>
            </select>
            <label>Catégorie :</label>
            <select name="category_id">
              <?php foreach ($categories as $category):?>
                <option value="<?php echo htmlspecialchars($category['id']) ?>"><?php echo htmlspecialchars($category['name']) ?></option>
              <?php endforeach; ?>
            </select>
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
