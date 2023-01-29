<?php

require_once __DIR__ . "/Person.php";

class Manager extends Person
{

    private $dividend, $bonus;

    public function __construct(
        $name,
        $last,
        $dateOfBirth,
        $placeOfBirth,
        $SSN,
        $dividend,
        $bonus
    ) {
        parent::__construct(
            $name,
            $last,
            $dateOfBirth,
            $placeOfBirth,
            $SSN
        );
        $this->setdividend($dividend);
        $this->setbonus($bonus);
    }

    public function getDividend()
    {
        return $this->dividend;
    }
    public function setDividend($dividend)
    {
        $this->dividend = $dividend;
    }

    public function getbonus()
    {
        return $this->bonus;
    }
    public function setbonus($bonus)
    {
        $this->bonus = $bonus;
    }

    public function getAnnualIncome()
    {
        return ($this->dividend * 12) + $this->bonus;
    }
}
