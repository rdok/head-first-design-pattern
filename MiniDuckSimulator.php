<?php

use src\Fly\FlyRocketPowered;
use src\MallardDuck;
use src\ModelDuck;

require __DIR__ . '/vendor/autoload.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
