<?php
class ScoreCalculator {
    public static function double($score) {
        return $score * 2;
    }

    public static function average($score1, $score2) {
        return ($score1 + $score2) / 2;
    }

    public static function isHighScore($score, $threshold) {
        return $score >= $threshold;
    }
}
