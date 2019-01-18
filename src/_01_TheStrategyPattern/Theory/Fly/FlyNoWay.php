<?php

namespace src\_01_TheStrategyPattern\Theory\Fly;

class FlyNoWay implements FlyBehavior
{
    public function fly(): string
    {
        return "I can't fly";
    }
}