<?php 

abstract class Car{

    public $cname;
    protected $color;
    private $fuel;


    public function __construct($n,$co)
    {
        $this->cname = $n;
        $this->color = $co;

    }


    public function setName($name)
    {
        $this->cname = $name;

        return $this;
    }

       public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }


    abstract public function move();


    abstract public function getFuel();


    abstract public function startEngine();
    

}