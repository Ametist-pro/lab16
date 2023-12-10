<?php

class Animal {
    public $food;
    public $location;

    public function __construct($food, $location) {
        $this->food = $food;
        $this->location = $location;
    }

    public function makeNoise() {
        echo "Такое-то животное говорит...";
    }

    public function eat() {
        echo "Такое-то животное ест " . $this->food;
    }

    public function sleep() {
        echo "Такое-то животное спит " . $this->location;
    }
}

class Dog extends Animal {
    public $name;
    public $say;

    public function __construct($food, $location, $name, $say) {
        parent::__construct($food, $location);
        $this->name = $name;
        $this->say = $say;
    }

    public function makeNoise() {
        echo $this->name . " говорит " . $this->say;
    }

    public function eat() {
        echo $this->name . " ест " . $this->food;
    }

    public function sleep() {
        echo $this->name . " спит " . $this->location;
    }
}

class Cat extends Animal {
    public $name;
    public $say;

    public function __construct($food, $location, $name, $say) {
        parent::__construct($food, $location);
        $this->name = $name;
        $this->say = $say;
    }

    public function makeNoise() {
        echo $this->name . " говорит " . $this->say;
    }

    public function eat() {
        echo $this->name . " ест " . $this->food;
    }

    public function sleep() {
        echo $this->name . " спит " . $this->location;
    }
}

class Horse extends Animal {
    public $name;
    public $say;

    public function __construct($food, $location, $name, $say) {
        parent::__construct($food, $location);
        $this->name = $name;
        $this->say = $say;
    }

    public function makeNoise() {
        echo $this->name . " говорит " . $this->say;
    }

    public function eat() {
        echo $this->name . " ест " . $this->food;
    }

    public function sleep() {
        echo $this->name . " спит " . $this->location;
    }
}


class Veterinarian {
    public function treatAnimal($animal) {
        echo "Пришло животное: " . $animal->name . "<br>";
        echo "Ест: " . $animal->food . "<br>";
        echo "Место обитания: " . $animal->location . "<br>";
        echo "Спит: " . $animal->location . "<br>";
        echo "Говорит: " . $animal->say . "<br>";
        echo "<br>";
    }
}

$dog = new Dog("кости", "в будке","собака","гав-гав");
$cat = new Cat("рыбу", "дома","кошка","мяу");
$horse = new Horse("сено", "в сарае","лошадь","иго-го");

$veterinarian = new Veterinarian();
$veterinarian->treatAnimal($dog);
$veterinarian->treatAnimal($cat);
$veterinarian->treatAnimal($horse);

?>
