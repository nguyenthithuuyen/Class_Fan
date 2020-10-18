<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = 'blue';

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param string $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function toString()
    {
        if ($this->on){
            echo "speed :", $this->speed, "<br>" , "color :",$this->color, "<br>", "radius: ",$this->radius,"<br>", "fan is on", "<br";


        }else{
            echo "color :",$this->color, "<br>", "radius: ",$this->radius,"<br>", "fan is off", "<br>";
        }

    }
}