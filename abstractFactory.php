<?php
require_once './vendor/autoload.php';

use DP\Creational\AbstractFactory\AbstractFactory;
use DP\Creational\AbstractFactory\ConcreteFactory1;
use DP\Creational\AbstractFactory\ConcreteFactory2;


function clientCode(AbstractFactory $factory)
{
    $product_a = $factory->createProductA();
    $product_b = $factory->createProductB();

    print($product_b->usefulFunctionB() . "\n");
    print($product_b->anotherUsefulFunctionB($product_a) . "\n");
}

print("Client: Testing client code with the first factory type...\n");
clientCode(new ConcreteFactory1());

print("\n");

print("Client: Testing the same client code with the second factory type...\n");
clientCode(new ConcreteFactory2());