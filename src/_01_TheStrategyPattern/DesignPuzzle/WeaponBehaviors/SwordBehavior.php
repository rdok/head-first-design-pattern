<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        return 'swings sword.';
    }
}