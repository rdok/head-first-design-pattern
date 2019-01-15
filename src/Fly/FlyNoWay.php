<?php

namespace src\Fly;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I can't fly";
    }
}