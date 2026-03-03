<?php

interface Voiture {
    public function demarrer();
    public function afficher();
}


class VoitureAncienne {
    public function demarrerAncienMode() {
        echo "Voiture ancienne démarre à l’ancienne\n";
    }

    public function afficherAncienne() {
        echo "Voiture ancienne, pas de GPS, moteur standard\n";
    }
}


class VoitureAdapter implements Voiture {
    private $ancienne;

    public function __construct(VoitureAncienne $ancienne) {
        $this->ancienne = $ancienne;
    }

    public function demarrer() {
        $this->ancienne->demarrerAncienMode();
    }

    public function afficher() {
        $this->ancienne->afficherAncienne();
    }
}

function testVoiture(Voiture $voiture) {
    $voiture->demarrer();
    $voiture->afficher();
}

$ancienne = new VoitureAncienne();
$adapter = new VoitureAdapter($ancienne);

testVoiture($adapter);