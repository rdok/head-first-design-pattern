<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\Characters;

use src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors\AxeBehavior;

class Troll extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new AxeBehavior();
    }

    protected function name()
    {
        return 'Troll';
    }
}