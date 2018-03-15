<?php

abstract class Shape{
  protected $_position;
  protected $_color;
  protected $_opacity;

  function __construct(){
    $this->_position = new Point();
    $this->_color = "black";
    $this->_opacity = "1";
  }

  public function setPosition($x,$y){
     $this->_position->moveTo($x,$y);
  }
  public function getPosition(){
    return $this->_position;
  }
  public function setColor($col){
     $this->_color = $col;
  }
  public function getColor(){
    return $this->_color;
  }
  public function setOpacity($opa){
     $this->_opacity = $opa;
  }
  public function getOpacity(){
    return $this->_opacity;
  }

  abstract function draw($render);
}



 ?>
