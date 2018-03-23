<?php include 'getdata.php';?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>M1 MySQL</title>
</head>
<body>
  <section class="header_container">
    <h1>Bons de commande</h1>
    <h3><a href="index.php">Retourner à l'accueil</a></h3>
    <adress class="adress">
      <h1><?php echo $result[0]['customerName'];?> </h1>
      <h2><?php echo ($result[0]['contactFirstName'] . " " . $result[0]['contactLastName']);?> </h2>
      <h3><?php echo $result[0]['addressLine1'];?> </h3>
      <h3><?php echo $result[0]['city'];?> </h3>
    </adress>
  </section>
  <hr />
  <section class="main_container">
    <h2>Bon de commande n°<?php echo $_GET["id"]  ?></h2>
    <table>
      <thead>
        <tr class=flex_container>
          <th>Produit</th>
          <th>Prix unitaire</th>
          <th>Quantité</th>
          <th>Prix Total</th>
        </tr>
      </thead>
        <?php foreach ($result2 as $lines):?>
          <tr>
            <td><?php echo ($lines['productName']);?></td>
            <td><?php echo ($lines['priceEach'] . ' €');?></td>
            <td><?php echo ($lines['quantityOrdered']);?></td>
            <td><?php echo ($lines['totalPrice'] . ' €');?></td>
          </tr>
         <?php endforeach; ?>
         <tr>
           <td colspan="3">Montant Total HT</td>
           <td><?php echo ($prixHT . ' €') ?></td>
         </tr>
         <tr>
           <td colspan="3">TVA (20%)</td>
           <td><?php echo ($montantTva . ' €') ?></td>
         </tr>
         <tr>
            <td colspan="3">Montant Total TTC</td>
            <td><?php echo ($montantTtc . ' €') ?></td>
         </tr>
       </table>
     </section>
</body>
</html>
