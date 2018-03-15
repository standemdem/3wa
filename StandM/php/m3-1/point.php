<?php

class Point {
  protected $_x;
  protected $_y;


  public function __construct(){
    $this->_x = 10;
    $this->_y = 10;
  }

  public function getX(){
    return $this->_x;
  }
  public function getY(){
    return $this->_y;
  }

  public function moveTo($x, $y){
    $this->_x = $x;
    $this->_y = $y;
  }
}

 ?>
