<?php


namespace FactoryMethod;

interface Notification {
    public function envoyer(string $message): void;
}

