<?php
class Game {
    private $title;
    private $genre;
    private $score;

    public function __construct($title, $genre = "Not informed") {
        $this->title = $title;
        $this->genre = $genre;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        if ($score < 0) {
            echo "Error: score cannot be negative!<br>";
            return;
        }

        $this->score = $score;
    }

    public function reset() {
        $this->score = 0;
    }

    public function show() {
        echo "Game: " . $this->title . " (" . $this->genre . ") - Score: " . $this->score . "<br>";
    }

    public static function createDefault() {
        return new self("No title", "Not informed");
    }
}
