<?php
  class Rectangle extends Shape{

    public function __construct(){
      parent::__construct();
      $this->_width=0 ;
      $this->_height=0 ;
    }

    protected $_width;
    protected $_height;

    function draw($render){
      $render->drawRectangle($this);
    }

    function setSize($width, $height){
      $this->_width=$width;
      $this->_height=$height;
    }

    function getWidth(){
      return $this->_width;
    }
    function getSize(){
      return $this->_height;
    }
  }
 ?>
