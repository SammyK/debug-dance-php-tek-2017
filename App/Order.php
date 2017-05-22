<?php

namespace App;

class Order
{
    private $price;
    private $user;

    public function __construct(string $price, User $user)
    {
        $this->price = $price;
        $this->user = $user;
    }

    public function __toString(): string
    {
        $name = $this->user->getName();
        $price = $this->getFormattedPrice();
        return sprintf(
            '%s made an order for %s.',
            $name,
            $price
        );
    }

    private function getFormattedPrice(): string
    {
        return '$'.number_format($this->price, 2);
    }
}
