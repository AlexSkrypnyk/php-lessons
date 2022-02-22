<?php
// OOP example

class Pet {

  // class property
  public $name;

  public function __construct ($name = FALSE){
    if($name) {
      $this->name = $name;
    }
  }

  // class method
  public function makeSound() {
    print $this->getSound() . ' ' . $this->name . ' ' . $this->getCountTimes() . ' times' . "\n";
  }

  public function updateName($new_name) {
    $this->name = $new_name . rand();
  }

  protected function getSound() {
    return '';
  }

  private function getCountTimes() {
    return strlen($this->name);
  }
}

class Cat extends Pet {

  protected function getSound() {
    return 'meow';
  }
}

class Dog extends Pet {

  protected function getSound() {
    return 'gav';
  }

  public function updateName($new_name) {
    $this->name = $new_name . ' superdog';
  }

}


class Student {

  public $name;

  /**
   * @var \Pet
   */
  public $pet;

  public function info() {
    print $this->name . PHP_EOL;
    $this->pet->makeSound();
  }
}

////////////////////////////////

// Create new object of class Cat.
$cat1 = new Cat('Mary');
$cat1->updateName('Mary2 ');
$cat1->makeSound();


$cat2 = new Cat('Goldy');
$cat2->makeSound();

$dog1 = new Dog('Jack');
$dog1->updateName('Myjack ');
$dog1->makeSound();


$st1 = new Student();
$st1->name = 'Alex';
$st1->pet = $cat1;
$st1->info();

$st2 = new Student();
$st2->name = 'Tony';
$st2->pet = $dog1;
$st2->info();
