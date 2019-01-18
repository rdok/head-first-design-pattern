<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\Characters;

use src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors\SwordBehavior;

class King extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new SwordBehavior();
    }

    protected function name()
    {
        return 'King';
    }
}