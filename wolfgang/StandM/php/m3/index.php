<?php
// class Personnage {
//   private $_nom;
//   public $age = 0;
//   public function parler(String $text){
//       echo $this->_nom . ' : ' . $text;
//     }
//   function __construct($name){
//     $this->_nom = $name;
//   }
//   public function getNom():String{
//     return $this->_nom;
//   }
//   public function setNom($name){
//     $this->_nom = $name;
//   }
// }
//
// $perso1 = new Personnage("nom de Zeus ");
// $perso1->parler("Hello World");
// echo $perso1->getNom();
// $perso1->setNom("Marty Mc Fly");
// echo $perso1->getNom();

/******************ANIMAL******/

// class Animal {
//   protected $_nbPattes;
//   protected $_nom;
//   public $color = null;
//   function __construct(){
//     $this->_nbPattes = 0;
//     $this->_nom = null;
//   }
//   public function getNbPattes(){
//     return $this->_nbPattes;
//   }
//   public function getName(){
//     return $this->_nom;
//   }
// }
//
// class Giraffe extends Animal{
//   public $color="rose";
//
//   function __construct(){
//     parent::__construct();
//       $this->neckSize = 250;
//       $this->_nbPattes = 4;
//       $this->_nom = "Giraffe";
//   }
// }
//
// $giraffe1 = new Animal("Giraffe", 4);
// echo $giraffe1->getNbPattes();
// echo $giraffe1->getname();
// echo $giraffe1->color;
//
// $giraffe2 = new Giraffe();
// echo $giraffe2->getNbPattes();
// echo $giraffe2->getName();
// var_dump ($giraffe2);

/*ANIMAL V2 MODIFICATION DU CONSTRUCTEUR*/

abstract class Animal {
  protected $_nbPattes;
  protected $_nom;
  public $color = null;

  public function __construct(){
  }
  public function getNbPattes(){
    return $this->_nbPattes;
  }
  public function getName(){
    return $this->_nom;
  }
  abstract function crier();
}

class Giraffe extends Animal{
  public $color="rose";
  public $neckSize = 250;
  protected $_nbPattes = 4;
  protected $_nom = "Giraffe";

  public function __construct($size){
    parent::__construct();
    $this->neckSize = $size;
  }
  function crier(){
    echo "Mugiiiiiiiii";
  }
}

// $giraffe1 = new Animal("Giraffe", 4);
// echo $giraffe1->getNbPattes();
// echo $giraffe1->getname();
// echo $giraffe1->color;

$giraffe2 = new Giraffe(400);
// echo $giraffe2->getNbPattes();
// echo $giraffe2->getName();
$giraffe2->crier();
var_dump ($giraffe2);








 ?>
