<?php

class Coffee {
    public function getDescription(): string {
        return "Café";
    }

    public function getPrice(): float {
        return 2.0;
    }
}

class CoffeeWithMilk extends Coffee {
    public function getDescription(): string {
        return "Café + lait";
    }

    public function getPrice(): float {
        return 2.5;
    }
}

class CoffeeWithSugar extends Coffee {
    public function getDescription(): string {
        return "Café + sucre";
    }

    public function getPrice(): float {
        return 2.2;
    }
}

class CoffeeWithMilkAndSugar extends Coffee {
    public function getDescription(): string {
        return "Café + lait + sucre";
    }

    public function getPrice(): float {
        return 2.7;
    }
}

class CoffeeWithVanilla extends Coffee {
    public function getDescription(): string {
        return "Café + vanille";
    }

    public function getPrice(): float {
        return 2.8;
    }
}

class CoffeeWithVanillaAndSugar extends Coffee {
    public function getDescription(): string {
        return "Café + vanille + sucre";
    }

    public function getPrice(): float {
        return 3.0;
    }
}
