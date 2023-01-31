<?php

class Person
{

    private $name;
    private $last;
    private $dateOfBirth;
    private $placeOfBirth;
    private $SSN;

    public function __construct(
        $name,
        $last,
        $dateOfBirth,
        $placeOfBirth,
        $SSN
    ) {
        $this->setName($name);
        $this->setLast($last);
        $this->setDateOfBirth($dateOfBirth);
        $this->setPlaceOfBirth($placeOfBirth);
        $this->setSSN($SSN);
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLast()
    {
        return $this->last;
    }
    public function setLast($last)
    {
        $this->last = $last;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;
    }

    public function getSSN()
    {
        return $this->SSN;
    }
    public function setSSN($SSN)
    {
        $this->SSN = $SSN;
    }

    public function getHTML()
    {
        return
            "<br>" . "name: " . $this->getName()
            . "<br>" . "last: " . $this->getLast()
            . "<br>" . "dateOfBirth: " . $this->getDateOfBirth()
            . "<br>" . "placeOfBirth: " . $this->getPlaceOfBirth()
            . "<br>" . "SSN: " . $this->getSSN();
    }
}
