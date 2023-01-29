<?php

class Wage
{

    // Variables
    private $perMonth;
    private $thirteenth, $fourteenth;

    // Constructor
    public function __construct($perMonth, $thirteenth, $fourteenth)
    {
        $this->setPerMonth($perMonth);
        $this->setThirteenth($thirteenth);
        $this->setFourteenth($fourteenth);
    }

    // Properties
    public function getPerMonth()
    {
        return $this->perMonth;
    }
    public function setPerMonth(int $perMonth)
    {
        $this->perMonth = $perMonth;
    }

    public function getThirteenth()
    {
        return $this->thirteenth;
    }
    public function setThirteenth(bool $thirteenth)
    {
        $this->thirteenth = $thirteenth;
    }

    public function getFourteenth()
    {
        return $this->fourteenth;
    }
    public function setFourteenth(bool $fourteenth)
    {
        $this->fourteenth = $fourteenth;
    }

    // Methods
    public function getAnnualIncome()
    {
        $perMonth = $this->getPerMonth();
        return ($perMonth * 12)
            + ($this->getThirteenth() ? $perMonth : 0)
            + ($this->getFourteenth() ? $perMonth : 0);
    }
}
