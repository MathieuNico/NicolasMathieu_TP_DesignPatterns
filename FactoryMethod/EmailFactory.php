<?php

namespace FactoryMethod;

class EmailFactory extends NotificationFactory {

    public function creerNotification(): Notification {
        return new EmailNotification();
    }

}

