
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Resto</title>
    <link rel="stylesheet" href="/StandM/php/m5/public/assets/css/style.css" />
  </head>

  <body>
    <header>
      <a href="home"><img src="https://3wa.fr/wp-content/themes/3wa2015/img/logos/big.png" /> <h1>Restaurant - Made In America !</h1></a>
    </header>
    <div class="container navigation">
      <div class="flex_row">
        <a href="booking" class="green_button">Réserver</a>
        <a href="" class="green_button">Commander</a>
      </div>
      <div class="flex_row">
        <?php if(!empty($_SESSION)){
          echo '<a href="deconnexion" class="green_button">Déconnexion</a>';
        }else{
          echo '<a href="connexion" class="green_button">Connexion</a>';
        }
         ?>
      </div>

    </div>
    <div class="container">
      <a href="registerr">s'inscrire</a>
      <?php if(Auth::isAdmin()):?>
      <a href="administration">Espace Admin</a>
      <?php endif; ?>
      <?php if(isset($_SESSION['alert'])){
        Alert::get();}?>
      <?php echo($content)?>
      <?php if(Auth::isAdmin()): ?>
        <nav>
          <a href="addproduct" class="green_button">Ajout Produits</a>
          <a href="listproduct" class="green_button">Liste Produits</a>
          <a href="updateproduct" class="green_button">Modification</a>
          <a href="deleteproduct" class="green_button">Suppression</a>
        </nav>
    <?php endif; ?>
    </div>

    <footer>
      <small id="licence">
  		    <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/"><img alt="Propriété de la 3W Academy" style="border-width:0" src="https://3wa.fr/wp-content/themes/3wa2015/img/logos/big.png" /></a><br /><span>Cet exercice</span> de <a href="https://3wa.fr">3W Academy</a> est mis à disposition <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">pour l'usage personnel des étudiants, Pas de Rediffusion - Attribution - Pas d'Utilisation Commerciale - Pas de Modification - International</a>.<br />Les autorisations au-delà du champ de cette licence peuvent être obtenues auprès de <a href="mailto:contact@3wa.fr" rel="cc:morePermissions">contact@3wa.fr</a>. Les maquettes ont été réalisées par <a href="http://www.justine-muller.fr">Justine Muller</a>.
  		</small>
    </footer>
  </body>

</html>
