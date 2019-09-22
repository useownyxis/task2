<?php


abstract class AbstractPeople
{
    protected $name;
    protected $position;


    abstract public function getPayment():int;


    public function __construct(string $name, string $position)
    {
        $this->name = $name;
        $this->position = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition(string $position)
    {
        $this->position = $position;
    }

}