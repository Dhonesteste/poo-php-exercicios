<?php
require_once 'Game.php';
require_once 'ScoreCalculator.php';

$game1 = new Game("Elden Ring");
$game1->setScore(1500);

$game2 = new Game("Fortnite", "Battle Royale");
$game2->setScore(850);

echo ScoreCalculator::double($game1->getScore()) . "<br>";
echo ScoreCalculator::average($game1->getScore(), $game2->getScore()) . "<br>";
echo Game::$instanceCount . "<br>";
