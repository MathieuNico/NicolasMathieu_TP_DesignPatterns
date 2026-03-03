<?php
namespace Observer;

use Observer\Observer;
class User1 implements Observer {

    public function update($message) {
        echo "User1 reçoit : " . $message . PHP_EOL;
    }

}
