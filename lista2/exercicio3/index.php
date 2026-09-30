<?php
require_once 'ScoreCalculator.php';

echo ScoreCalculator::double(150) . "<br>";
echo ScoreCalculator::average(1500, 800) . "<br>";
echo ScoreCalculator::isHighScore(1500, 1000) . "<br>";
