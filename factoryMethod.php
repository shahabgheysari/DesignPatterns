<?php
require_once './vendor/autoload.php';

use DP\Creational\FactoryMethod\ConcreteCreator1;
use DP\Creational\FactoryMethod\ConcreteCreator2;
use DP\Creational\FactoryMethod\Creator;

function clientCode(Creator $creator)
{
    print("Client: I'm not aware of the creator's class, but it still works.\n".$creator->someOperation());    
}
 
print("App: Launched with the ConcreteCreator1.\n");
clientCode(new ConcreteCreator1());
print("\n\n");

print("App: Launched with the ConcreteCreator2.\n");
clientCode(new ConcreteCreator2());