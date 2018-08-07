<?php
namespace DP\Creational\FactoryMethod;
use DP\Creational\FactoryMethod\Product;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
