<?php


interface Command {
    public function execute();
}



class Light {

    public function turnOn() {
        echo "La lumière est allumée 💡\n";
    }

    public function turnOff() {
        echo "La lumière est éteinte 🌙\n";
    }
}

class MusicPlayer {

    public function playMusic() {
        echo "La musique démarre 🎵\n";
    }
}


class LightOnCommand implements Command {

    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOn();
    }
}

class LightOffCommand implements Command {

    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOff();
    }
}

class PlayMusicCommand implements Command {

    private $musicPlayer;

    public function __construct(MusicPlayer $musicPlayer) {
        $this->musicPlayer = $musicPlayer;
    }

    public function execute() {
        $this->musicPlayer->playMusic();
    }
}

class RemoteControl {

    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function pressButton() {
        $this->command->execute();
    }
}


$light = new Light();
$music = new MusicPlayer();

$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);
$playMusic = new PlayMusicCommand($music);

$remote = new RemoteControl();

$remote->setCommand($lightOn);
$remote->pressButton();

$remote->setCommand($lightOff);
$remote->pressButton();

$remote->setCommand($playMusic);
$remote->pressButton();