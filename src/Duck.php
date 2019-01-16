<?php

namespace src;

use src\Fly\FlyBehavior;
use src\Quack\QuackBehavior;

abstract class Duck
{
    /** @var QuackBehavior */
    protected $quackBehavior;

    /** @var FlyBehavior */
    protected $flyBehavior;

    abstract public function display(): void;

    public function performQuack()
    {
        $message = sprintf("%s\n", $this->quackBehavior->quack());

        echo $message;
    }

    public function performFly()
    {
        $message = sprintf("%s\n", $this->flyBehavior->fly());

        echo $message;
    }

    public function swim(): void
    {
        echo 'All ducks float, even decoyes!';
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }
}