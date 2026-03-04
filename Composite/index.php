<?php


interface GameComponent {
    public function getPrice();
    public function display();
}


class Game implements GameComponent {

    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function display() {
        echo "Jeu : {$this->name} - {$this->price}€\n";
    }
}


class GamePack implements GameComponent {

    private $name;
    private $games = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function add(GameComponent $game) {
        $this->games[] = $game;
    }

    public function remove(GameComponent $game) {
        $index = array_search($game, $this->games, true);
        if ($index !== false) {
            unset($this->games[$index]);
        }
    }

    public function getPrice() {
        $total = 0;

        foreach ($this->games as $game) {
            $total += $game->getPrice();
        }

        return $total;
    }

    public function display() {

        echo "\nPack : {$this->name}\n";

        foreach ($this->games as $game) {
            $game->display();
        }

        echo "Prix total : " . $this->getPrice() . "€\n";
    }
}


$game1 = new Game("The Witcher 3", 30);
$game2 = new Game("Cyberpunk 2077", 40);
$game3 = new Game("Minecraft", 20);

$indiePack = new GamePack("Pack Indie");
$indiePack->add($game3);

$rpgPack = new GamePack("Pack RPG");
$rpgPack->add($game1);
$rpgPack->add($game2);


$megaPack = new GamePack("Mega Pack Gamer");

$megaPack->add($rpgPack);
$megaPack->add($indiePack);

$megaPack->display();