<?php

class FixedWage implements IWage
{
    private $wage;

    public function __construct($wage)
    {
        $this->wage = $wage;
    }

    public function getWage()
    {
        return $this->wage;
    }
}
