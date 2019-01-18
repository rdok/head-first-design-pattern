<?php

namespace src\_01_TheStrategyPattern\Theory\Quack;

class MuteQuack implements QuackBehavior
{
    public function quack(): string
    {
        return "<< Silence >>";
    }
}