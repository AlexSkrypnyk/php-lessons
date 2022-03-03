<?php
// OOP example

class Vehicle {
  protected $year;
  protected $color;

  function __construct($year1, $color1) {
    $this->setYear($year1);
    $this->color = $color1;
  }

  public function info() {
    echo "Info: " . $this->year . ', ' . $this->color . "\n";
  }

  public function printColor() {
    echo "Color: " . $this->color . "\n";
  }

  protected function setYear($year) {
    if (!is_int($year)) {
      throw new \Exception('Numeric field required');
    }
    $this->year = $year;
  }
}


class Car extends Vehicle {
  private $is_turbo;

  function __construct($year1, $color1, $is_turbo) {
    parent::__construct($year1, $color1);
    $this->is_turbo = $is_turbo;
  }

  public function info() {
    $turbo = '';
    if($this->is_turbo){
      $turbo = 'TURBO';
    }
    echo "Info for car: " . $this->year . ', ' . $this->color . ', '. $turbo ."\n";
  }

}

class Truck extends Vehicle {
  private $is_fwd;

  function __construct($year1, $color1, $is_fwd) {
    parent::__construct($year1, $color1);
    $this->is_fwd = $is_fwd;
  }

  public function info() {
    $fwd = '';
    if($this->is_fwd){
      $fwd = '4x4';
    }
    echo "Info for truck: " . $this->year . ', ' . $this->color . ', '. $fwd ."\n";
  }
}

// ----------------------
// ----------------------
// ----------------------

$vehicles = [
  new Car(2000, 'blue', TRUE),
  new Car(2010, 'yellow', FALSE),
  new Truck(2011, 'blue', TRUE),
  new Truck(2012, 'yellow', FALSE),
];

foreach ($vehicles as $vehicle) {
  // API  - application programmatical interface
  $vehicle->info();
  $vehicle->printColor();
}
