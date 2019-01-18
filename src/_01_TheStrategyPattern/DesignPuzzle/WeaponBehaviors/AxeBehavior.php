<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        return 'swings axe.';
    }
}