<?php
  class Circle extends Shape{

    public function __construct(){
      parent::__construct();
      $this->_radius=0;
    }

    protected $_radius;

    function draw($render){
      $render->drawCircle($this);
    }

    function setSize($width, $height, $radius){
      $this->_width=$width;
      $this->_height=$height;
      $this->_radius=$radius;
    }

    function getWidth(){
      return $this->_width;
    }
    function getSize(){
      return $this->_height;
    }
    function getRadius(){
      return $this->_radius;
    }
  }



 ?>
