<?php

require 'IWage.php';
require 'Worker.php';
require 'Designer.php';
require 'Developer.php';
require 'HtmlDesigner.php';
require 'FixedWage.php';
require 'DynamicWage.php';
require 'Team.php';

$designer = new Designer("Ivanov", "Ivan", "Ivanovich", new FixedWage(3000));
$seniorDeveloper = new Developer("Duke", "Nikita", "Dukovich", new DynamicWage(60,10));
$middleDeveloper = new Developer("Misha", "Miha", "Petrovich", new FixedWage(1000));
$middleDeveloperTwo = new Developer("Lolopshin", "Mitya", "Vasilevich", new FixedWage(1000));
$htmlDesigner = new HtmlDesigner("Misko" ,"Andrew", "Vadimovich", new DynamicWage(120,5));

$team = new Team("X");
$team->addWorker($designer);
$team->addWorker($seniorDeveloper);
$team->addWorker($middleDeveloper);
$team->addWorker($middleDeveloperTwo);
$team->addWorker($htmlDesigner);
echo "Общая сумма для выплаты зарплаты команды " .$team->getTeamName() . " составляет: " . $team->sumWageTeam() . "." . "</br>";
