<?php

use src\_01_TheStrategyPattern\Theory\Fly\FlyRocketPowered;
use src\_01_TheStrategyPattern\Theory\MallardDuck;
use src\_01_TheStrategyPattern\Theory\ModelDuck;

require __DIR__ . '/../../../vendor/autoload.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
