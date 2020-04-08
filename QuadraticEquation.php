<?php


class QuadraticEquation
{
    protected $coefficient1;
    protected $coefficient2;
    protected $coefficient3;

    public function __construct($coefficient1, $coefficient2, $coefficient3)
    {
        $this->coefficient1 = $coefficient1;
        $this->coefficient2 = $coefficient2;
        $this->coefficient3 = $coefficient3;
    }

    public function getCoefficient1()
    {
        return $this->coefficient1;
    }

    public function getCoefficient2()
    {
        return $this->coefficient2;
    }

    public function getCoefficient3()
    {
        return $this->coefficient3;
    }

    public function getDiscriminant()
    {
        return $this->getCoefficient2() * $this->getCoefficient2() - 4 * $this->getCoefficient1() * $this->getCoefficient1();
    }

    public function getRoot1()
    {
        return (-$this->getCoefficient2() + Math . pow($this->getDiscriminant(), 0.5) / (2 * $this->getCoefficient1()));
    }

    public function getRoot2()
    {
        return (-$this->getCoefficient2() - Math . pow($this->getDiscriminant(), 0.5) / (2 * $this->getCoefficient1()));
    }
}