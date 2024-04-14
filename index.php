<?php
interface DogInterface {
    public function makeSound();
    public function hunt();
}

class ShibaInu implements DogInterface {
    public function makeSound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "Hunting...";
    }
}

class Pug implements DogInterface {
    public function makeSound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "Too lazy to hunt...";
    }
}

class Dachshund implements DogInterface {
    public function makeSound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "Hunting...";
    }
}

class PlushLabrador implements DogInterface {
    public function makeSound() {
        return "No sound";
    }

    public function hunt() {
        return "Can't hunt";
    }
}

class RubberDachshund implements DogInterface {
    public function makeSound() {
        return "Squeak! Squeak!";
    }

    public function hunt() {
        return "Can't hunt";
    }
}

if (basename(__FILE__) === basename($_SERVER['PHP_SELF'])) {

echo "Welcome!\n";
echo "Please enter the type of dog and action (e.g., shiba-inu sound) or type 'exit' to quit:\n";

while (true) {
    
    $handle = fopen("php://stdin", "r");
    $line = fgets($handle);
    $line = trim($line);

    if ($line == 'exit') {
        echo "Exiting...\n";
        exit;
    }

    $args = explode(' ', $line);

    if (count($args) != 2) {
        echo "Invalid input. Please provide the type of dog and action.\n";
        continue;
    }

    $dogType = $args[0];
    $action = $args[1];

    $dog = null;

    switch ($dogType) {
        case 'shiba-inu':
            $dog = new ShibaInu();
            break;
        case 'pug':
            $dog = new Pug();
            break;
        case 'dachshund':
            $dog = new Dachshund();
            break;
        case 'plush-labrador':
            $dog = new PlushLabrador();
            break;
        case 'rubber-dachshund':
            $dog = new RubberDachshund();
            break;
        default:
            echo "Unknown dog type\n";
            break 2; 
    }

    switch ($action) {
        case 'sound':
            echo $dog->makeSound() . "\n";
            break;
        case 'hunt':
            echo $dog->hunt() . "\n";
            break;
        default:
            echo "Unknown action\n";
            break 2; 
    }
}
}