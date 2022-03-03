<?php

//  Figure->SidesFigure -> Triangle
//                      -> Square
//                      -> Rectangle
//  Figure->Circle


abstract class Figure {
  abstract public function area();
}

abstract class SidesFigure extends Figure {

  public $sides = [];

  public function __construct($given_sides) {
    $this->checkSides($given_sides);
    $this->sides = $given_sides;
  }

  public function perimeter() {
    $p = 0;
    foreach ($this->sides as $side) {
      $p = $p + $side;
    }

    return $p;
  }

  protected function checkSides($sides) {
    if (count($sides) != $this->getSidesCount()) {
      throw new \Exception('Expected ' . $this->getSidesCount() . ' sides');
    }
  }

  protected function getSidesCount() {
    return 0;
  }
}

class Triangle extends SidesFigure {

  protected function getSidesCount() {
    return 3;
  }

  public function area() {

  }
}

class Square extends SidesFigure {

  public function __construct($given_sides) {
    $given_sides = array_fill(0, 4, $given_sides[0]);
    parent::__construct($given_sides);
  }

  protected function getSidesCount() {
    return 4;
  }

  public function area() {

  }
}

class Rectangle extends SidesFigure {

  public function __construct($given_sides) {
    $given_sides = [$given_sides[0], $given_sides[1], $given_sides[0], $given_sides[1]];
    parent::__construct($given_sides);
  }


  protected function getSidesCount() {
    return 4;
  }

  public function area() {

  }
}

class Circle extends Figure {

  public $radius;

  function area() {

  }
}


$tr1 = new Triangle([1, 2, 3]);
print $tr1->perimeter();
print PHP_EOL;

$sq1 = new Square([5]);
print $sq1->perimeter();
print PHP_EOL;

$rect1 = new Rectangle([2, 6]);
print $rect1->perimeter();
print PHP_EOL;


$figures = [];

foreach ($figures as $figure) {
  print $figure->area();
}
