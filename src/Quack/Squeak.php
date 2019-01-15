<?php

namespace src\Quack;

class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak";
    }
}