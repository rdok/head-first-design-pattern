<?php

namespace src\Fly;

class FlyWithWings implements FlyBehavior
{
    public function fly(): string
    {
        return "I'm flying.";
    }
}