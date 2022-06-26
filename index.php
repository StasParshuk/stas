
<?php
require_once __DIR__ . "/setting.php";
function my_autoloader($class) {
    include 'dz11/' . $class . '.php';
}

spl_autoload_register('my_autoloader');
$order = CreateEconom::create_order();
echo $order->price(20);
