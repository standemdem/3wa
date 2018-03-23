<?php

class Admin{
  function __construct(){
    $this->db=Database::getInstance();
    $this->pdo=$this->db->pdo;
  }
  function addProduct($productName, $description, $img, $price){
    $sql='INSERT INTO `products`(`productName`, `descritption`, `img`, `price`)
    VALUES (:productName, :descritption, :img, :price)';
    $req=$this->pdo->prepare($sql);
    $req->execute([
      "productName" =>$productName,
      "descritption"=>$description,
      "img"         =>$img,
      "price"       =>$price
    ]);
  }
}
