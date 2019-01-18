<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors;

class SwordAndShieldBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        return 'draws sword and shield';
    }
}