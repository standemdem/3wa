<?php
  class Triangle extends Shape{
    protected $_pointA;
    protected $_pointB;
    protected $_pointC;

    public function __construct(){
      parent::__construct();
      $this->_pointA = new Point();
      $this->_pointB = new Point();
      $this->_pointC = new Point();
    }

    function draw($render){
      $render->drawTriangle($this);
    }

    function setPointA($x, $y){
      $this->_pointA->moveTo($x,$y);
    }
    function setPointB($x, $y){
      $this->_pointB->moveTo($x,$y);
    }
    function setPointC($x, $y){
      $this->_pointC->moveTo($x,$y);
    }

    function getPointA(){
      return $this->_pointA;
    }
    function getPointB(){
      return $this->_pointB;
    }
    function getPointC(){
      return $this->_pointC;
    }

  }



 ?>
