<?php
require_once 'Game.php';

$game1 = new Game("Elden Ring");
$game2 = new Game("Beyond Good & Evil", "Action-Adventure");
$game3 = new Game("Fortnite", "Battle Royale");

Game::listAll();
