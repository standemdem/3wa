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

/*TENTATIVE DE PAGINATION */
$sql = "SELECT COUNT('id') AS numberLines
        FROM `orders`";

$req = $db->prepare($sql);
$req->execute();
$data = $req->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $key => $value) {
  $numberLines = $value['numberLines'];
};
$perPage = 20;
$nbPage = ceil($numberLines/$perPage);
$currentPage = 1;

if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p'] <= $nbPage) {
  $currentPage = $_GET['p'];
}
else{
  $currentPage = 1;
};

/*==================================*/
$sql = "SELECT `orderNumber`,`orderDate`,`shippedDate`,`status`
        FROM `orders`
        ORDER BY `orderNumber`
        LIMIT :start, :maxi
        ";

$req = $db->prepare($sql);
$req->bindValue(':start', (($currentPage-1)*$perPage), PDO::PARAM_INT);
$req->bindValue(':maxi', $perPage, PDO::PARAM_INT);
$req->execute();
$data = $req->fetchAll(PDO::FETCH_ASSOC);

?>
