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
        $this->setDividend($dividend);
        $this->setBonus($bonus);
    }

    public function getDividend()
    {
        return $this->dividend;
    }
    public function setDividend($dividend)
    {
        $this->dividend = $dividend;
    }

    public function getBonus()
    {
        return $this->bonus;
    }
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }

    public function getAnnualIncome()
    {
        return ($this->dividend * 12) + $this->bonus;
    }

    public function getHTML()
    {
        return
            parent::getHTML()
            . "<br>" . "dividend: " . $this->getDividend() . "€"
            . "<br>" . "bonus: " . $this->getBonus() . "€"
            . "<br>" . "annual income: " . $this->getAnnualIncome() . "€";
    }
}
