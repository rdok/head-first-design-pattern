<?php

namespace src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        return 'draws bow and prepares an arrow.';
    }
}