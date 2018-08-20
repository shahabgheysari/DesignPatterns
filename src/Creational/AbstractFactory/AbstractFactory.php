<?php
namespace DP\Creational\AbstractFactory;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;

}
