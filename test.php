<?php

use PHPUnit\Framework\TestCase;

require_once 'index.php';

class DogTest extends TestCase {
    public function testShibaInu() {
        $shibaInu = new ShibaInu();
        $this->assertEquals("woof! woof!", $shibaInu->makeSound());
        $this->assertEquals("Hunting...", $shibaInu->hunt());
    }

    public function testPug() {
        $pug = new Pug();
        $this->assertEquals("woof! woof!", $pug->makeSound());
        $this->assertEquals("Too lazy to hunt...", $pug->hunt());
    }

    public function testDachshund() {
        $dachshund = new Dachshund();
        $this->assertEquals("woof! woof!", $dachshund->makeSound());
        $this->assertEquals("Hunting...", $dachshund->hunt());
    }

    public function testPlushLabrador() {
        $plushLabrador = new PlushLabrador();
        $this->assertEquals("No sound", $plushLabrador->makeSound());
        $this->assertEquals("Can't hunt", $plushLabrador->hunt());
    }

    public function testRubberDachshund() {
        $rubberDachshund = new RubberDachshund();
        $this->assertEquals("Squeak! Squeak!", $rubberDachshund->makeSound());
        $this->assertEquals("Can't hunt", $rubberDachshund->hunt());
    }
}