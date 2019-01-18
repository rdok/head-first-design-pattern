<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\Characters;

use src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors\BowAndArrowBehavior;

class Queen extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new BowAndArrowBehavior();
    }

    protected function name()
    {
        return 'Queen';
    }
}