<?php

class Voiture
{
    public $couleur;
    public $moteur;
    public $gps;

    public function afficher()
    {
        echo "Voiture : Couleur={$this->couleur}, Moteur={$this->moteur}, GPS=" . ($this->gps ? 'Oui' : 'Non') . PHP_EOL;
    }
}


interface Builder
{
    public function setCouleur($couleur);
    public function setMoteur($moteur);
    public function setGPS($gps);
    public function getVoiture();
}


class VoitureBuilder implements Builder
{
    private $voiture;

    public function __construct()
    {
        $this->voiture = new Voiture();
    }

    public function setCouleur($couleur)
    {
        $this->voiture->couleur = $couleur;
    }

    public function setMoteur($moteur)
    {
        $this->voiture->moteur = $moteur;
    }

    public function setGPS($gps)
    {
        $this->voiture->gps = $gps;
    }

    public function getVoiture()
    {
        return $this->voiture;
    }
}

$builder = new VoitureBuilder();

$builder->setCouleur('Rouge');
$builder->setMoteur('V8');
$builder->setGPS(true);
$voiture1 = $builder->getVoiture();
$voiture1->afficher();


$builder = new VoitureBuilder(); 
$builder->setCouleur('Blanche');
$builder->setMoteur('V4');
$builder->setGPS(false);
$voiture2 = $builder->getVoiture();
$voiture2->afficher();
