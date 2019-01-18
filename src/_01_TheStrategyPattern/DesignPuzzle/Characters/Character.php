<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\Characters;

use src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors\WeaponBehavior;

abstract class Character
{
    /** @var WeaponBehavior */
    protected $weaponBehavior;

    public function fight(): void
    {
        $name = $this->name();

        $behavior = $this->weaponBehavior->useWeapon();

        echo sprintf("%s %s\n", $name, $behavior);
    }

    abstract protected function name();

    public function setWeaponBehavior(WeaponBehavior $weaponBehavior): void
    {
        $this->weaponBehavior = $weaponBehavior;
    }
}