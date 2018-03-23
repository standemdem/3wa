<?php

class SvgRenderer {
  protected $_shapes=[];
  protected $_results=[];

  function addShape($shape){
    array_push($this->_shapes, $shape);
  }

  function run(){
    foreach ($this->_shapes as $shape) {
      $shape->draw($this);
    }
  }

  function drawRectangle($rect){
    array_push($this->_results, '<rect
    width="' . $rect->getWidth() . '"
    height="' . $rect->getSize() .'"
    x="' .  $rect->getPosition()->getX() .'"
    y="' .  $rect->getPosition()->getY() .'"
    style="fill:' . $rect->getColor() .';fill-opacity:' . $rect->getOpacity() .';"></rect>');
  }

  function drawCircle($circle1){
    array_push($this->_results, '<circle
    cx="' . $circle1->getPosition()->getX() .'"
    cy="' . $circle1->getPosition()->getY() .'"
    r="' .  $circle1->getRadius().'"
    style="fill:' . $circle1->getColor() .';fill-opacity:' . $circle1->getOpacity()
    .';"></circle>');
  }

  function drawTriangle($triangle1){
    array_push($this->_results, '<polygon
    points="' . $triangle1->getPointA()->getX() . ' ' .
    $triangle1->getPointA()->getY() . ', ' .
    $triangle1->getPointB()->getX() . ' ' .
    $triangle1->getPointB()->getY() . ', ' .
    $triangle1->getPointC()->getX() . ' ' .
    $triangle1->getPointC()->getY() . '"
    style="fill:' .$triangle1->getColor() .'; fill-opacity:' . $triangle1->getOpacity() .'"/>');
  }

  function drawSquare($square){
    array_push($this->_results, '<rect
    width="' . $square->getWidth() . '"
    height="' . $square->getWidth() .'"
    x="' .  $square->getPosition()->getX() .'"
    y="' .  $square->getPosition()->getY() .'"
    style="fill:' . $square->getColor() .';fill-opacity:' . $square->getOpacity() .';"></rect>');
  }

  function getResults(){
    foreach ($this->_results as $value) {
      echo $value;
    }
  }
}
?>
