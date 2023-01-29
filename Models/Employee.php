<?php

require_once __DIR__ . "/Wage.php";

class Employee extends Person
{

    private Wage $wage;
    private $employmentDate;

    public function __construct(
        $name,
        $last,
        $dateOfBirth,
        $placeOfBirth,
        $SSN,
        Wage $wage
    ) {
        parent::__construct(
            $name,
            $last,
            $dateOfBirth,
            $placeOfBirth,
            $SSN
        );
        $this->setWage($wage);
        $this->employmentDate = date("d-m-y");
    }

    public function getWage()
    {
        return $this->wage;
    }
    public function setWage(Wage $wage)
    {
        $this->wage = $wage;
    }
    public function getAnnualIncome()
    {
        return $this->wage->getAnnualIncome();
    }

    public function getEmploymentDate()
    {
        return $this->employmentDate;
    }
}
