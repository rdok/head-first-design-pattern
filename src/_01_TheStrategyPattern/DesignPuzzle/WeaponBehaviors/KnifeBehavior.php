<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors;

class KnifeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        return 'swing knife.';
    }
}