<?php
require_once 'Order.php';

$order1 = new Order(150);
$order2 = new Order(300);
$order3 = new Order(99.90);

echo Order::$totalValueSold . "<br>";
