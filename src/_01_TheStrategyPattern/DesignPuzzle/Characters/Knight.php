<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\Characters;

use src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors\SwordAndShieldBehavior;

class Knight extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new SwordAndShieldBehavior();
    }

    protected function name()
    {
        return 'Knight';
    }
}