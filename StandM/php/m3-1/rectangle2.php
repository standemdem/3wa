<?php
  class Rectangle2 extends Shape{

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

    function setSize($_width, $_height){
      $this->_width=150;
      $this->_height=100;
    }

    function getWidth(){
      return $this->_width;
    }
    function getSize(){
      return $this->_height;
    }
  }



 ?>
