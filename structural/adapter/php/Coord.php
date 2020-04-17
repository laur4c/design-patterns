<?php
class Coord
{
    private $value = 0;

    public function sum(Coord $coord)
    {
        $this->value = $this->value + $coord->getValue();
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string)$this->value;
    }
}