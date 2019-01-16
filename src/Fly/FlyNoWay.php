<?php

namespace src\Fly;

class FlyNoWay implements FlyBehavior
{
    public function fly(): string
    {
        return "I can't fly";
    }
}