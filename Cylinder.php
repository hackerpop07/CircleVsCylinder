<?php


class Cylinder extends Circle
{
    public $h;

    public function __construct($radius, $color, $h)
    {
        parent::__construct($radius, $color);
        $this->h = $h;
    }

    /**
     * @return mixed
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * @param mixed $h
     */
    public function setH($h)
    {
        $this->h = $h;
    }

    public function cylinderVolume()
    {
        $s = pi() * ($this->getRadius() ** 2) * $this->getH();
        echo "S: ", $s;
    }
}