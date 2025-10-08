<?php 

namespace Moe1\Oop3\Car;

abstract class Car
{
   public $carName;
   public $carColor;
   protected $model;

   public function __construct($carName , $carColor)
   {
      $this->carName = $carName;
      $this->carColor = $carColor;

   } 


   public function getCarName()
   {
    return $this->carName;
   }

   
   public function getCarColor()
   {
    return $this->carColor;
   }


   abstract protected function setModel($model);
    
    
}