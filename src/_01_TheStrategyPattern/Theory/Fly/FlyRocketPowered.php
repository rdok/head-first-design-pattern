<?php

namespace src\_01_TheStrategyPattern\Theory\Fly;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): string
    {
        return "I'm flying with a rocket!";
    }
}