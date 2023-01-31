<?php

require_once __DIR__ . "/Models/Wage.php";
require_once __DIR__ . "/Models/Person.php";
require_once __DIR__ . "/Models/Employee.php";
require_once __DIR__ . "/Models/Manager.php";

// Stipendi
$wages = [
    "junior" => new Wage(1400, false, false),
    "intermediate" => new Wage(1450, true, false),
    "senior" => new Wage(1600, true, true),
    "executive" => new Wage(2000, true, true)
];

echo "STIPENDI" . "<br><br>";
foreach ($wages as $wage) {
    echo $wage->getHTML();
    echo "<br>";
}

// Persone
$people = [
    new Person("Francesco", "Limpias", "07-02-1999", "Udine", "LMPFNC99B07L483Y"),
    new Person("Mario", "Limpias", "07-02-1999", "Udine", "LMPFNC99B07L483Y"),
    new Person("Gigi", "Limpias", "07-02-1999", "Udine", "LMPFNC99B07L483Y"),
    new Person("Ambrogio", "Limpias", "07-02-1999", "Udine", "LMPFNC99B07L483Y"),
];

echo "<br>" . "PERSONE" . "<br>";
foreach ($people as $person) {
    echo $person->getHTML();
    echo "<br>";
}

// Impiegati
$employees = [
    new Employee("Mario", "Rossi", "02-02-1900", "Milano", "LMPFSC90B07L483C", $wages["junior"]),
    new Employee("Marco", "Rossi", "02-02-1900", "Milano", "LMPFSC90B07L483C", $wages["intermediate"]),
    new Employee("Matteo", "Rossi", "02-02-1900", "Milano", "LMPFSC90B07L483C", $wages["senior"]),
    new Employee("Madonna", "Rossi", "02-02-1900", "Milano", "LMPFSC90B07L483C", $wages["executive"])
];

echo "<br>" . "IMPIEGATI" . "<br>";
foreach ($employees as $employee) {
    echo $employee->getHTML();
    echo "<br>";
}

// Boss
$daBoss = new Manager("Francesco", "Limpias", "07-02-1999", "Udine, IT", "LMPFNC99B07L483Y", "2500", "3000");
echo "<br>" . "MANAGER" . "<br>";
echo $daBoss->getHTML();