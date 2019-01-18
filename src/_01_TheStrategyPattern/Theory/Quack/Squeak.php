<?php

namespace src\_01_TheStrategyPattern\Theory\Quack;

class Squeak implements QuackBehavior
{
    public function quack(): string
    {
        return "Squeak";
    }
}