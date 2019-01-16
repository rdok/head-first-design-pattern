<?php

namespace src\Quack;

class Squeak implements QuackBehavior
{
    public function quack(): string
    {
        return "Squeak";
    }
}