<?php 


class Student extends Person
{
   public $studentId;
   public $specialization;
   public $department;
   public $gpa;

   public function __construct($n, $add, $g , $stdid = null , $sps = null , $dept = null, $gpa = null)
   {

          parent::__construct($n, $add, $g);

          $this->studentId = $stdid;
          $this->specialization = $sps;
          $this->department = $dept;
          $this->gpa = $gpa;

   }


   public function setGpa($gpa)
   {
     $this->gpa = $gpa;

     return $this;
   }

   public function getInfo()
   {
          // Method Overriding 
       return parent::getInfo() . ' '.
              $this->studentId . ' '.
              $this->specialization . ' '.
              $this->department . ' ' . 
              $this->gpa . ' ' ;

   }

}