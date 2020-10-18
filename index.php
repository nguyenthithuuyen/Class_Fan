<?php
include 'Fan.php';
$fan1 = new Fan();
$fan1->setSpeed(10);
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan1->setOn("on");
echo $fan1->toString();
$fan2 = new  Fan();
$fan2->setSpeed(5);
$fan2->setRadius(5);
$fan2->setColor('blue');
$fan2->setOn("off");
echo  $fan2->toString();

