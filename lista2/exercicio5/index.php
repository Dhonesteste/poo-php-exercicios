<?php
// self::algo acessa uma propriedade ou método static, que pertence a classe em si, nao a um objeto especifico.
// $this->algo acessa uma propriedade ou método de instancia, que pertence ao objeto atual; so existe dentro de metodos nao-static.

class Game {
    private $title;

    public static $instanceCount = 0;

    public function __construct($title) {
        $this->title = $title;
        self::$instanceCount++;
    }

    // Tentativa proposital de erro, usando $this dentro de um metodo static:
    // public static function brokenMethod() {
    //     return $this->title;
    // }
    // Erro obtido ao rodar: Fatal error: Uncaught Error: Using $this when not in object context

    public static function fixedMethod() {
        return self::$instanceCount;
    }
}

$game1 = new Game("Elden Ring");

echo Game::fixedMethod() . "<br>";
