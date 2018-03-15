<?php include("../logic/admin_logic.php")  ?>
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
	<title>Module 11 - Mindgeek</title>
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="index.php"><i class="fas fa-microphone"></i> Encore un Blog ?! #nonMaisAllo</a></h1>
      <p>Bienvenue <?php echo $names[0]?></p>
      <a href="../views/admin.php"><i class="fas fa-cogs"></i>Administration</a>
      <a href="../logic/disconnexion_action.php"><i class="fas fa-bed"></i>Déconnexion</a>
    </div>
  </header>
  <main class="container">
    <h2><i class="fas fa-cogs"></i>Panneau d'administration</h2>
    <a href="add_post.php">Rédiger un nouvel article</a>
    <div class="article_container">
			<table>
				<tr>
					<th colspan="6">Liste des articles</th>
				</tr>
				<tr>
					<th>Titre</th>
					<th>Article</th>
					<th>Auteur</th>
					<th>Catégorie</th>
          <th colspan="2">Edition</th>
				</tr>
				<?php foreach ($articles as $article):?>
  				<tr class="table_content">
            <td><a href="../views/article.php?id=<?php echo $article['id'] ?>"><?php echo htmlspecialchars($article["title"]) ?></a></td>

  					<td><?php echo htmlspecialchars(substr($article["content"], 0, 10)) . "[...]" ?></td>
  					<td><?php echo htmlspecialchars($article["first_name"]) . ' ' . htmlspecialchars($article["last_name"]) ?></td>
  					<td><?php echo htmlspecialchars($article["name"]) ?></td>
  					<td><a href="../views/edit_post.php?id=<?php echo htmlspecialchars($article['id']) ?>"><i class="fas fa-pencil-alt"></i></a></td>
  					<td><a href="../logic/delete_article.php?id=<?php echo htmlspecialchars($article['id'])?>" ><i class="fas fa-times"></i></a></td>
  				</tr>
				<?php endforeach ?>
			</table>
    </div>
    <div class="container">

    </div>

  </main>
  <footer class="container">
      <small >Le blog des élèves de la 3w Academy</small>
  </footer>

</body>
</html>
