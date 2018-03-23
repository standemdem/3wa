<?php

class Database{
    private static $_instance=null;
    public $pdo = null;

    public static function getInstance($config = null){
      if(self::$_instance === null){
        self::$_instance = new Database($config);
      }
      return self::$_instance;
    }

    function __construct($config){
      try{
      $this->pdo = new PDO ($config->get("dsn","database"),$config->get("username","database"),$config->get('password',"database"));
    }catch (PDOException $e){
      echo 'Connexion échouée:' . $e->getMessage();
    }
  }
}
