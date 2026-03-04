<?php

interface DeliveryStrategy {
    public function calculateCost($weight);
}


class StandardDelivery implements DeliveryStrategy {

    public function calculateCost($weight) {
        return 5 + ($weight * 0.5);
    }
}


class ExpressDelivery implements DeliveryStrategy {

    public function calculateCost($weight) {
        return 10 + ($weight * 1);
    }
}


class RelayDelivery implements DeliveryStrategy {

    public function calculateCost($weight) {
        return 3 + ($weight * 0.3);
    }
}

class DeliveryContext {

    private $strategy;

    public function __construct(DeliveryStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(DeliveryStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function getDeliveryCost($weight) {
        return $this->strategy->calculateCost($weight);
    }
}


$weight = 10; // poids du colis

$delivery = new DeliveryContext(new StandardDelivery());

echo "Livraison Standard : " . $delivery->getDeliveryCost($weight) . "€\n";

$delivery->setStrategy(new ExpressDelivery());
echo "Livraison Express : " . $delivery->getDeliveryCost($weight) . "€\n";

$delivery->setStrategy(new RelayDelivery());
echo "Livraison Point Relais : " . $delivery->getDeliveryCost($weight) . "€\n";