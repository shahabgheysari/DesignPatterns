<?php
namespace DP\Creational\AbstractFactory;

class concreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The Result of product A1";
    }
}