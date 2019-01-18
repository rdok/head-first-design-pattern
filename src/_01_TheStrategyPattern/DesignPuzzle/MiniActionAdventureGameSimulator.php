<?php

use src\_01_TheStrategyPattern\DesignPuzzle\Characters\Knight;
use src\_01_TheStrategyPattern\DesignPuzzle\Characters\Troll;
use src\_01_TheStrategyPattern\DesignPuzzle\WeaponBehaviors\SwordBehavior;
use src\_01_TheStrategyPattern\Theory\Fly\FlyRocketPowered;
use src\_01_TheStrategyPattern\Theory\ModelDuck;

require __DIR__ . '/../../../vendor/autoload.php';

$troll = new Troll();
$knight = new Knight();

$troll->fight();
$knight->fight();

$troll->setWeaponBehavior(new SwordBehavior());
$troll->fight();

