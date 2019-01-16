<?php

namespace src\Quack;

class Quack implements QuackBehavior
{
    public function quack(): string
    {
        return "Quack";
    }
}