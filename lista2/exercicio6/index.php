<?php
require_once 'Game.php';

$game1 = new Game("Elden Ring");

$game1->setScore(15000);
echo $game1->getScore() . "<br>";

$game1->setScore(5000);
echo $game1->getScore() . "<br>";
