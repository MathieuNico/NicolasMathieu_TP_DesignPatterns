<?php

class SystemeA {
    public function operationA() {
        echo "Système A : opération A exécutée\n";
    }
}

class SystemeB {
    public function operationB() {
        echo "Système B : opération B exécutée\n";
    }
}

class SystemeC {
    public function operationC() {
        echo "Système C : opération C exécutée\n";
    }
}


class Facade {
    private $systemeA;
    private $systemeB;
    private $systemeC;

    public function __construct() {
        $this->systemeA = new SystemeA();
        $this->systemeB = new SystemeB();
        $this->systemeC = new SystemeC();
    }

    public function operationGlobale() {
        echo "Facade : démarrage de l'opération globale\n";
        $this->systemeA->operationA();
        $this->systemeB->operationB();
        $this->systemeC->operationC();
        echo "Facade : opération globale terminée\n";
    }
}

$facade = new Facade();
$facade->operationGlobale();