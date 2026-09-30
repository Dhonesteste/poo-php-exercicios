<?php
class Order {
    private $value;

    public static $totalValueSold = 0;

    public function __construct($value) {
        $this->value = $value;
        self::$totalValueSold += $value;
    }

    public function getValue() {
        return $this->value;
    }
}
