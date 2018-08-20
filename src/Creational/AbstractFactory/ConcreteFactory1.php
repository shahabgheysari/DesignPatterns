<?php
namespace DP\Creational\AbstractFactory;
use DP\Creational\AbstractFactory\ConcreteProductA1;
use DP\Creational\AbstractFactory\ConcreteProductB1;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}