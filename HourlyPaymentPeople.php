<?php

require_once "AbstractPeople.php";

class HourlyPaymentPeople extends AbstractPeople
{
    private $hourlyPayment = 0;
    private $timeInHours = 0;

    public function __construct(string $name, string $position, int $hourlyPayment, int $timeInHours)
    {
        $this->hourlyPayment = $hourlyPayment;
        $this->timeInHours = $timeInHours;
        parent::__construct($name, $position);
    }

    public function setHourlyPayment(int $hourlyPayment)
    {
        $this->hourlyPayment = $hourlyPayment;
    }

    public function getHourlyPayment():int
    {
        return $this->hourlyPayment;
    }

    public function setTimeInHours(int $timeInHours)
    {
        $this->timeInHours = $timeInHours;
    }

    public function getTimeInHours():int
    {
        return $this->timeInHours;
    }

    public function getPayment(): int
    {
        return $this->hourlyPayment * $this->timeInHours;
    }

}