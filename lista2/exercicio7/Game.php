<?php
class Game {
    private $title;
    private $genre;
    private $score;
    private $status;

    const STATUS_NOT_STARTED = "not_started";
    const STATUS_IN_PROGRESS = "in_progress";
    const STATUS_COMPLETED = "completed";

    public function __construct($title, $genre = "Not informed") {
        $this->title = $title;
        $this->genre = $genre;
        $this->status = self::STATUS_NOT_STARTED;
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

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function reset() {
        $this->score = 0;
    }

    public function show() {
        echo "Game: " . $this->title . " (" . $this->genre . ") - Score: " . $this->score . "<br>";
    }
}
