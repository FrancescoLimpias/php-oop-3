<?php

require_once __DIR__ . "/Models/Wage.php";

$wages = [
    "junior" => new Wage(1400, false, false),
    "intermediate" => new Wage(1450, true, false),
    "senior" => new Wage(1600, true, true),
    "executive" => new Wage(2000, true, true)
];

foreach ($wages as $wage) {
    echo $wage->getHTML();
}
