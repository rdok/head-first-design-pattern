<?php

namespace src;

abstract class Duck
{
    /** @var QuackBehavior */
    protected $quackBehavior;

    /** @var FlyBehavior */
    protected $flyBehavior;

    abstract public function display(): void;

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function swim(): void
    {
        echo 'All ducks float, even decoyes!';
    }
}