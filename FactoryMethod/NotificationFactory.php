<?php

namespace FactoryMethod;

abstract class NotificationFactory {

    abstract public function creerNotification(): Notification;

    public function envoyerNotification(string $message): void {
        $notification = $this->creerNotification();
        $notification->envoyer($message);
    }

}
