<?php

interface CoffeeInterface {
    public function getDescription(): string;
    public function getPrice(): float;
}

class SimpleCoffee implements CoffeeInterface {
    public function getDescription(): string {
        return "Café";
    }

    public function getPrice(): float {
        return 2.0;
    }
}

abstract class CoffeeDecorator implements CoffeeInterface {
    protected CoffeeInterface $coffee;

    public function __construct(CoffeeInterface $coffee) {
        $this->coffee = $coffee;
    }
}

class MilkDecorator extends CoffeeDecorator {
    public function getDescription(): string {
        return $this->coffee->getDescription() . " + lait";
    }

    public function getPrice(): float {
        return $this->coffee->getPrice() + 0.5;
    }
}

class SugarDecorator extends CoffeeDecorator {
    public function getDescription(): string {
        return $this->coffee->getDescription() . " + sucre";
    }

    public function getPrice(): float {
        return $this->coffee->getPrice() + 0.2;
    }
}

class VanillaDecorator extends CoffeeDecorator {
    public function getDescription(): string {
        return $this->coffee->getDescription() . " + vanille";
    }

    public function getPrice(): float {
        return $this->coffee->getPrice() + 0.8;
    }
}

class CreamDecorator extends CoffeeDecorator {
    public function getDescription(): string {
        return $this->coffee->getDescription() . " + crème";
    }

    public function getPrice(): float {
        return $this->coffee->getPrice() + 0.6;
    }
}

$coffee = new SimpleCoffee();

$coffee = new MilkDecorator($coffee);
$coffee = new SugarDecorator($coffee);
$coffee = new VanillaDecorator($coffee);

echo $coffee->getDescription() . "\n";
echo $coffee->getPrice() . " €\n";

