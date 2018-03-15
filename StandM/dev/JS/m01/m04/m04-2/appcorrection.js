<!-- Fichier Javascript -->
<script>
  var
  difficulty,
  armor,
  sword,
  lifePlayer,
  lifeDragon;

  /*
    Initialize les variables du jeu
  */
  function initialize(){
    difficulty = parseInt(prompt("Veuillez choisir une difficulté (facile : 1, normal : 2, difficile : 3)"));
    armor = parseInt(prompt("Veuillez choisir une armure (faible : 1, normal : 2, très résistante : 3)"));
    sword = parseInt(prompt("Veuillez choisir une épée (faible : 1, normal : 2, très puissante : 3)"));

    lifePlayer = 1000;
    lifeDragon = 1000;

  }

  function gameLoop(){
    while(lifeDragon > 0 && lifePlayer > 0){

      // Générer une vitesse aléatoire pour le Joueur
      var playerSpeed = random(10, 20);
      // Générer une vitesse aléatoire pour le Dragon
      var dragonSpeed = random(10, 20);
      // Le plus rapide attaque l'autre


      if(playerSpeed > dragonSpeed){ // Le joueur est plus rapide que le dragon
        // Générer le nombre de points de vie à retirer au dragon
        var pointsAretirer = damageJoueur();
        lifeDragon = lifeDragon - pointsAretirer; // lifeDragon -= damageJoueur();
      }else if(playerSpeed < dragonSpeed){
        lifePlayer = lifePlayer - damageDragon();
      }else{ // playerSpeed == dragonSpeed
        alert('Egalité')
      }

      showGameState();
    }
    // le code ici sera executé lorsqu'on sort de la boucle while
    showWinner();
  }

  /*
    Renvoie le nombre de points de vie à retirer au Dragon
  */
  function damageJoueur(){
    var points;

    switch(difficulty){
      case 1 : // facile
          points = random(90, 100);
        break;
      case 2 : // normal
        points = random(70, 80);
        break;
      case 3 : // difficile
        points = random(30, 50);
        break;
    }

    return points * sword;
  }

  /*
    Renvoie le nombre de points de vie à retirer au Joueur
  */
  function damageDragon(){
    var points;

    switch(difficulty){
      case 1 : // facile
          points = random(1, 20);
        break;
      case 2 : // normal
        points = random(30, 50);
        break;
      case 3 : // difficile
        points = random(100, 150);
        break;
    }

    return points / armor;
  }

  /*
     Affiche l'état du jeu
  */
  function showGameState(){
    document.write("Il vous reste "+ lifePlayer +" points de vie");
    document.write("Il reste "+ lifeDragon +" points de vie au dragon");
  }

  function showWinner(){
    if(lifePlayer > lifeDragon){
      document.write("Vous avez gagné");
    }else{
      document.write("Vous avez perdu");
    }
  }

  function startGame(){
    initialize();
    gameLoop();
  }

  startGame();

  /*
    Génère un nombre aléatoire entre min et max
  */
  function random(min, max) {
    return Math.random() * (max - min) + min;
  }

</script>


<!-- Fichier CSS
<style>

  body {
    background: #e0e0e0;
  }



</style> -->


<!-- Fichier HTML
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Point</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

  </body>
</html> -->
