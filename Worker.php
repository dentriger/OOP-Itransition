<?php

class Worker
{
    private $name;
    private $surname;
    private $patronymic;
    private $wage;

    public function __construct($name,$surname,$patronymic, IWage $wage)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->wage = $wage;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getWage()
    {
        return $this->wage->getWage();
    }

}
