<?php

class User {
  private $db;
  private $pdo;

  public function __construct(){
    $this->db=Database::getInstance();
    $this->pdo=$this->db->pdo;
  }

  function addUser($last_name, $first_name, $birthdate, $address, $city, $postalCode, $phone, $email, $password){
    $sql = 'INSERT INTO `user`(`last_name`,`first_name`,`birthdate`,`address`, `city`,`postalCode`,`phone`,`email`,`password`)
          VALUES (:last_name, :first_name, :birthdate, :address, :city, :postalCode, :phone, :email, :password) ';
    $req=$this->pdo->prepare($sql);
    $req->execute([
      "last_name" =>$last_name,
      "first_name"=>$first_name,
      "birthdate" =>$birthdate,
      "address"   =>$address,
      "city"      =>$city,
      "postalCode"=>$postalCode,
      "phone"     =>$phone,
      "email"     =>$email,
      "password"  =>password_hash($password, PASSWORD_DEFAULT)
    ]);
   }

   function verify($value1,$value2){
     if($value1 == $value2){
       return true;
     }else{
       return false;
     }
   }

   function getUserByEmail($email){
     $data1 ='SELECT * FROM user WHERE email = :email';
     $req=$this->pdo->prepare($data1);
     $req->execute([
       'email'=>$email
     ]);
     $result=$req->fetch();
     return $result;
   }

   function getUserByCredentials($email, $password){
     if($user=$this->getUserByEmail($email)){
       if(password_verify($password,$user['password'])){
         return $user;
       }
     }
     return null;
   }
 }
