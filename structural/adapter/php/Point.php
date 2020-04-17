<?php
class Point
{
    private $x;
    private $y;

    public function __construct(Coord $x, Coord $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "(". $this->x .",". $this->y .")";
    }
}