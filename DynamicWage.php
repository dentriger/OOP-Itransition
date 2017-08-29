<?php

class DynamicWage implements IWage
{
    private $hour;
    private $wagePerHour;

    public function __construct($hour,$wagePerHour)
    {
        $this->hour = $hour;
        $this->wagePerHour = $wagePerHour;
    }

    public function getWage()
    {
        return $this->hour*$this->wagePerHour;
    }

}
