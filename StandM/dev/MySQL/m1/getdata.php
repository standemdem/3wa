<?php

$username = "root";
$password = "troiswa";

try {
    $db = new PDO('mysql:host=localhost;dbname=classicmodels', $username, $password);
  // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

/*PARTIE INFORMATION CLIENT*/
$get = $db->prepare(
$dataCustomer = "SELECT `customerName`,`contactFirstName`,`contactLastName`,`addressLine1`,`city`
                FROM `customers`
                INNER JOIN `orders`
                ON `customers`.`customerNumber`=`orders`.`customerNumber`
                WHERE orderNumber=:test
                ORDER BY `orderNumber`
                ");
$get->execute([
  "test" => $_GET["id"]
]);
$result = $get->fetchAll(PDO::FETCH_ASSOC);

/*PARTIE TABLEAU*/
$get2 = $db->prepare(
$dataProduct ="SELECT `orderNumber`,`products`.`productName`,`priceEach`,`quantityOrdered`,ROUND(`priceEach`*`quantityOrdered`,2) AS totalPrice
                FROM `orderdetails`
                INNER JOIN `products`
                ON `orderdetails`.`productCode`=`products`.`productCode`
                WHERE orderNumber=:test2
                ORDER BY `orderNumber`
                ");
$get2->execute([
  "test2" => $_GET["id"]
]);
$result2 = $get2->fetchAll(PDO::FETCH_ASSOC);

/*Calcul du prix HT*/
$prixHT = 0;
  foreach ($result2 as $key => $value) {
      $prixHT += $value['totalPrice'];
  }

  $montantTva = $prixHT*20/100;
  $montantTtc = $prixHT + $montantTva;
?>
