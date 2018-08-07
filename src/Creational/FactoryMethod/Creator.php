<?php
namespace DP\Creational\FactoryMethod;

abstract class Creator
{
    public abstract function factoryMethod() : Product;
    
    public function someOperation() : string 
    {
        $product = $this->factoryMethod();
        $result = "Creator: the same creator's code has just worked with ". $product->operation();
        return $result;
    }
}
