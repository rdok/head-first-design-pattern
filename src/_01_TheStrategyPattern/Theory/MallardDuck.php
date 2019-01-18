<?php

namespace src\_01_TheStrategyPattern\Theory;

use src\_01_TheStrategyPattern\Theory\Fly\FlyWithWings;
use src\_01_TheStrategyPattern\Theory\Quack\Quack;

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