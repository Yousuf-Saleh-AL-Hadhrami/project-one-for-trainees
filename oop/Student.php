<?php 


class Student extends Person implements Contract
{

    use HasBook; // trait

   public $studentId;
   public $specialization;
   public $department;
   public $gpa;
   private $password;
   private $is_login = false;
   private $marks = [];


   public function __construct($name, $address , $gender , $age, $sks = [] , $n , $co, $stdId , $sps , $dept , $gpa = null)
   {

          parent::__construct($name, $address , $gender , $age, $sks = [] , $n , $co);

          $this->name = $name;
          $this->address = $address;
          $this->gender = $gender;
          $this->age = $age;
          $this->sks = $sks;
          $this->cname = $n;
          $this->color= $co;
          $this->studentId = $stdId;
          $this->specialization = $sps;
          $this->department = $dept;
          $this->gpa = $gpa;
       

   }


   public function login($stdId, $password)
   {
     if($this->studentId == $stdId && password_verify($password, $this->password))
         {
             $this->is_login = true;
             return $this;
         } 

            return;    
    }


   public function setGpa($gpa)
   {
     $this->gpa = $gpa;

     return $this;
   }

   public function InsertMarks($marks)
   {
       $this->marks = $marks;

       return $this;
   }


   public function getInfo() 
   {
          // Method Overriding 
       return parent::getInfo() . ' '.
              $this->studentId . ' '.
              $this->specialization . ' '.
              $this->department . ' ' . 
              $this->gpa ;
               
   }

   public function makeSound()
   {
    return 'Beep Beep';
   }

}