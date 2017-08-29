<?php

class Team
{
    private $workers = [];
    private $teamName;

    public function __construct($teamName)
    {
        $this->teamName = $teamName;
    }

    public function addWorker($objWorker)
    {
        $this->workers[] = $objWorker;
    }

    public function sumWageTeam()
    {
        $result = 0;
        for ($i = 0; $i < count($this->workers); $i++)
        {
            $result += $this->workers[$i]->getWage();
        }
        return $result;

    }

    public function getTeamName()
    {
        return $this->teamName;
    }

}
