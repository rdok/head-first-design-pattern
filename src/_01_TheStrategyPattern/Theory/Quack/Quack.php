<?php

namespace src\_01_TheStrategyPattern\Theory\Quack;

class Quack implements QuackBehavior
{
    public function quack(): string
    {
        return "Quack";
    }
}