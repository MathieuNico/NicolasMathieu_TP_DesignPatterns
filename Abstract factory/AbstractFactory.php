<?php


interface Character {
    public function attack();
}

interface Weapon {
    public function useWeapon();
}



class Knight implements Character {

    public function attack() {
        echo "Le chevalier attaque avec courage ⚔️\n";
    }
}

class Sword implements Weapon {

    public function useWeapon() {
        echo "Utilisation de l'épée 🗡️\n";
    }
}

class SpaceSoldier implements Character {

    public function attack() {
        echo "Le soldat spatial tire avec son blaster 🚀\n";
    }
}

class LaserGun implements Weapon {

    public function useWeapon() {
        echo "Tir du laser 🔫\n";
    }
}



interface GameFactory {

    public function createCharacter();
    public function createWeapon();
}



class FantasyFactory implements GameFactory {

    public function createCharacter() {
        return new Knight();
    }

    public function createWeapon() {
        return new Sword();
    }
}

class SciFiFactory implements GameFactory {

    public function createCharacter() {
        return new SpaceSoldier();
    }

    public function createWeapon() {
        return new LaserGun();
    }
}



function playGame(GameFactory $factory) {

    $character = $factory->createCharacter();
    $weapon = $factory->createWeapon();

    $character->attack();
    $weapon->useWeapon();
}

echo "=== Univers Fantasy ===\n";

$fantasyFactory = new FantasyFactory();
playGame($fantasyFactory);

echo "\n=== Univers Sci-Fi ===\n";

$sciFactory = new SciFiFactory();
playGame($sciFactory);