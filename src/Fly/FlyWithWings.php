<?php

namespace src\Fly;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying.";
    }
}