<?php

namespace src\_01_TheStrategyPattern\Theory;

use src\_01_TheStrategyPattern\Theory\Fly\FlyNoWay;
use src\_01_TheStrategyPattern\Theory\Quack\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();

        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I'm a model duck.";
    }
}