<?php
namespace DP\Creational\FactoryMethod;
use DP\Creational\FactoryMethod\Creator;

class ConcreteCreator1 extends Creator
{
    public function FactoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}
