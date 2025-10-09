<?php 

namespace App\Person;

use App\Car\Car;

class Person extends Car{

    public $name;
    public $address;
    public $age;

    public function __construct($n , $add , $ag, $carName , $carColor)
    {
        parent::__construct($carName,$carColor);

        $this->name = $n;
        $this->address = $add;
        $this->age =$ag;
        $this->carName = $carName;
        $this->carColor = $carColor;
    }


    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    } 


    public function getInfo()
    {
        return "The name is {$this->name}
                and Address is {$this->address }
                and age is {$this->age}
                and has a car named {$this->carName}
                and car color is {$this->carColor}
                and car Model is  {$this->model}
                ";

    }
}