<?php
namespace DP\Creational\AbstractFactory;
use DP\Creational\AbstractFactory\ConcreteProductA2;
use DP\Creational\AbstractFactory\ConcreteProductB2;

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}