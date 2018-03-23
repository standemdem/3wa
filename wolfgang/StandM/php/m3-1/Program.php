<?php

class Program{
  function start($render){
    $rect = new Rectangle();
    $rect->setPosition(1, 2);
    $rect->setColor("blue");
    $rect->setOpacity(0.5);
    $rect->setSize(300, 250);

    $rect2 = new Rectangle();
    $rect2->setPosition(10, 22);
    $rect2->setColor("red");
    $rect2->setOpacity(0.5);
    $rect2->setSize(200, 150);

    $circle1 = new Circle();
    $circle1->setPosition(470, 182);
    $circle1->setColor("green");
    $circle1->setOpacity(0.5);
    $circle1->setSize(400, 250, 90);

    $triangle1 = new Triangle();
    $triangle1->setPointA(40, 51);
    $triangle1->setPointB(50, 61);
    $triangle1->setPointC(80, 31);
    $triangle1->setcolor("orange");
    $triangle1->setOpacity(0.5);

    $square = new Square();
    $square->setPosition(120, 22);
    $square->setColor("limegreen");
    $square->setOpacity(0.5);
    $square->setSize(200, 150);

    $render->addShape($rect);
    $render->addShape($rect2);
    $render->addShape($circle1);
    $render->addShape($triangle1);
    $render->addShape($square);
    $render->run();
  }
}

$program1=new Program();
$render = new SvgRenderer();

// echo '<svg>';
// $render->getResults();
// echo '</svg>';
$program1->start($render);


 ?>
