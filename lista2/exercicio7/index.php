<?php
require_once 'Game.php';

$game1 = new Game("Elden Ring");
$game1->setStatus(Game::STATUS_IN_PROGRESS);

$game2 = new Game("Fortnite", "Battle Royale");
$game2->setStatus(Game::STATUS_COMPLETED);

echo $game1->getStatus() . "<br>";
echo $game2->getStatus() . "<br>";
