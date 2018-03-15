<?php

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="style.css" />
    <title>M1-1 PHP</title>
</head>
<body>
  <header class="header_container">
    <h1 id="title_header">Gestionnaire de tâches</h1>
  </header>
  <section class="main_container">
    <form method="POST" action="remove.php">
      <fieldset>
        <legend>
          <h1>TO DO LIST</h1>
        </legend>
          <?php
            $path = 'tasks.csv';
            $lines = file($path);
            $csv = array_map('str_getcsv', file('tasks.csv'));

          ?>
            <?php foreach ($csv as $key => $value):?>
            <p><input class="taches"  value="<?php echo $key ?>" type="checkbox" name="list[]"/>
              <label><?php echo ($value[0]); ?></label>
              <?php
                    if($value[2] < date('Y-m-d')){
                      echo "<span class='late'>En retard</span>";
                    }
              ?>
            </p>
            <div class="hide">
              <?php echo $value[1]; ?>
            </div>

          <?php endforeach; ?>
        <input type="submit" value="Supprimer" name="delete" />
      </fieldset>
      <hr />
    </form>
    <form method="POST" action="add.php">
      <fieldset>
        <legend><h1>Ajouter une tâche</h1></legend>
        <label><h2>Titre</h2></label>
          <input type="text" name="title"/>
        <label><h2>Description</h2></label>
          <textarea rows="4" cols="50" name="textarea"></textarea>
        <label><h2>Date de fin:</h2></label>
          <input type="date" name="date"/>


        <label><h2>Priorité:</h2></label>
          <input type="radio" name="priority" value="low"/><label>basse</label>
          <input type="radio" name="priority" value="average"/><label>moyenn</label>
          <input type="radio" name="priority" value="high"/><label>haute</label>
          <input type="submit" name="submit" />
      </fieldset>
    </form>
  </section>







</body>
</html>
