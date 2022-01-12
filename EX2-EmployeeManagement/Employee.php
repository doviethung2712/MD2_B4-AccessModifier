<?php

class Employee
{
    private $name;
    private $day;
    private $addrees;
    private $position;

    public function __construct($name, $day, $addrees, $position)
    {
        $this->name = $name;
        $this->day = $day;
        $this->addrees = $addrees;
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setDay($day): void
    {
        $this->day = $day;
    }

    public function getAddrees()
    {
        return $this->addrees;
    }

    public function setAddrees($addrees): void
    {
        $this->addrees = $addrees;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }


}