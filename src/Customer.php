<?php

namespace My\Library;

class Customer
{
    public function __construct(private string $name) {}    
    
    public function sayHello(string $name): string
    {
        return 'Hello my Customer ' . $name . '!' . PHP_EOL;
    }
}