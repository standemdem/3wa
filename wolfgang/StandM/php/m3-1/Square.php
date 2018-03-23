<?php
  class Square extends Rectangle{

    public function __construct(){
      parent::__construct();
      $this->_width=0 ;
    }

    protected $_width;

    function draw($render){
      $render->drawSquare($this);
    }

    function setSize($_width,$_height){
      $this->_width=$_width;
    }

    function getWidth(){
      return $this->_width;
    }
  }



 ?>
