<?php

class Auth {
  static function isAdmin(){
    if(!Session::get('user')){
      return false;
    }
    $user = Session::get('user');
    return ($user['role']=='admin');
  }
  static function getAge(){
    $user =Session::get("user");
    $birthday = $user["birthdate"];
    return;
  }
}
