<?php

require_once "AbstractPeople.php";

class FixedPaymentPeople extends AbstractPeople
{
    private $fixedPayment = 0;

    public function __construct(string $name, string $position, int $rate)
    {
        $this->fixedPayment = $rate;
        parent::__construct($name, $position);
    }

    public function setFixedPayment(int $fixedPayment)
    {
        $this->fixedPayment = $fixedPayment;
    }

    public function getFixedPayment():int
    {
        return $this->fixedPayment;
    }

    public function getPayment(): int
    {
        return $this->fixedPayment;
    }
}