<?php

namespace FactoryMethod;

class EmailNotification implements Notification {

    public function envoyer(string $message): void {
        echo "Email : " . $message . PHP_EOL;
    }

}
