
<?php
require_once __DIR__ . "/setting.php";
function my_autoloader($class) {
    include 'dz11/' . $class . '.php';
}

spl_autoload_register('my_autoloader');
$order = new LuxTaxi();
$order->create_order();
var_dump($order->model_car());
var_dump($order->price(20));