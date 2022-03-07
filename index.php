<?php
include_once('Passat.php');

$newcar = new Passat();
$newcar->setWheul("right");
echo $newcar->getWheul();

$newcar->setColor("black");
echo $newcar->getColor();
