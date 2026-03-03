<?php
namespace Observer;
use Observer\Subject;
use Observer\User1;
use Observer\User2;


$subject = new Subject();

$user1 = new User1();
$user2 = new User2();

$subject->attach($user1);
$subject->attach($user2);

$subject->notify("Nouvelle notification !");
