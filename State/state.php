<?php

interface PlayerState {
    public function pressPlay($player);
    public function pressPause($player);
    public function pressStop($player);
}

class PlayState implements PlayerState {

    public function pressPlay($player) {
        echo "La musique est déjà en lecture 🎵\n";
    }

    public function pressPause($player) {
        echo "Musique en pause ⏸️\n";
        $player->setState(new PauseState());
    }

    public function pressStop($player) {
        echo "Musique arrêtée ⏹️\n";
        $player->setState(new StopState());
    }
}

class PauseState implements PlayerState {

    public function pressPlay($player) {
        echo "Reprise de la musique ▶️\n";
        $player->setState(new PlayState());
    }

    public function pressPause($player) {
        echo "La musique est déjà en pause\n";
    }

    public function pressStop($player) {
        echo "Musique arrêtée ⏹️\n";
        $player->setState(new StopState());
    }
}

class StopState implements PlayerState {

    public function pressPlay($player) {
        echo "Démarrage de la musique ▶️\n";
        $player->setState(new PlayState());
    }

    public function pressPause($player) {
        echo "Impossible de mettre en pause, la musique est arrêtée\n";
    }

    public function pressStop($player) {
        echo "La musique est déjà arrêtée\n";
    }
}


class MusicPlayer {

    private $state;

    public function __construct() {
        $this->state = new StopState();
    }

    public function setState(PlayerState $state) {
        $this->state = $state;
    }

    public function pressPlay() {
        $this->state->pressPlay($this);
    }

    public function pressPause() {
        $this->state->pressPause($this);
    }

    public function pressStop() {
        $this->state->pressStop($this);
    }
}


$player = new MusicPlayer();

$player->pressPlay();
$player->pressPause();
$player->pressPlay();
$player->pressStop();
$player->pressPause();