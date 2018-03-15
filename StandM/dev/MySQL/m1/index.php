<?php include 'sqlConnexion.php';?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>M1 MySQL</title>
</head>
<body>
  <section class="main_container">
    <h1>Bons de commande</h1>
    <h2 class="title">Liste de commandes</h2>
    <div class='flex_pagination' >
      <?php
      for($i=1;$i<=$nbPage;$i++){
        if($i==$currentPage){
            echo "<div class='button_paginationClick'>$i</div>";
        }
        else{
            echo "<div class='button_pagination'><a href='index.php?p=$i'>$i</a></div>";
        }
      }
     ?>
   </div>
    <table id="refresh">
      <thead>
        <tr class=flex_container>
          <th>Commande</th>
          <th>Date de la commande</th>
          <th>Date de livraison</th>
          <th>Statut</th>
        </tr>
        <?php foreach ($data as $lines):?>
          <tr>
            <td><?php echo ("<a href='bdc.php?id=$lines[orderNumber]' class='links'>" .  $lines['orderNumber'] . "</a>") ?></td>
            <td><?php echo $lines['orderDate'] ?></td>
            <td><?php echo $lines['shippedDate']?></td>
            <td><?php echo $lines['status']?></td>
          </tr>
        <?php endforeach; ?>
      </thead>
    </table>
  </section>
  <script type="text/javascript" language="javascript">


</script>

</body>
</html>
