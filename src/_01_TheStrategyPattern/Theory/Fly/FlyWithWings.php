<?php

namespace src\_01_TheStrategyPattern\Theory\Fly;

class FlyWithWings implements FlyBehavior
{
    public function fly(): string
    {
        return "I'm flying.";
    }
}