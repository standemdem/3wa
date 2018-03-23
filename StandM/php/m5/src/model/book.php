<?php

class Book {
  function __construct(){
    $this->db=Database::getInstance();
    $this->pdo=$this->db->pdo;
  }
  function addBooking($date,$hour,$minute){
    $sql='INSERT INTO `booking`(`date`, `hour`, `minute`)
          VALUES (:day, :hour, :minute)
          INNER JOIN `user`
          WHERE `id_user`=`user`.`id`';
    $req=$this->pdo->prepare($sql);
    $req->execute([
      "day"=>$date,
      "hour"=>$hour,
      "min"=>$minute
    ]);
  }
}
