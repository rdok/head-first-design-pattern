<?php

namespace src;

use src\Fly\FlyWithWings;
use src\Quack\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();

        $this->flyBehavior = new FlyWithWings();
    }

    public function display(): void
    {
        echo "I'm a real Mallard duck";
    }
}