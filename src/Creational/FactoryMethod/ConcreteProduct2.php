<?php
namespace DP\Creational\FactoryMethod;
use DP\Creational\FactoryMethod\Product;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
