<?php
namespace Observer;
use Observer\Observer;

class User2 implements Observer {

    public function update($message) {
        echo "User2 reçoit : " . $message . PHP_EOL;
    }

}
