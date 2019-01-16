<?php

namespace src\Quack;

class MuteQuack implements QuackBehavior
{
    public function quack(): string
    {
        return "<< Silence >>";
    }
}