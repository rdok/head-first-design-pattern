<?php

namespace src\Quack;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "<< Silence >>";
    }
}