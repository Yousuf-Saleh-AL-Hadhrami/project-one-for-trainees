<?php 


class Student extends Person
{
   public $studentId;
   public $specialization;
   public $department;
   public $gpa;
   private $password;
   private $is_login = false;
   private $marks = [];


   public function __construct($n, $add, $g , $stdid = null , $sps = null , $dept = null, $gpa = null,$pass = null)
   {

          parent::__construct($n, $add, $g, $pass);

          $this->studentId = $stdid;
          $this->specialization = $sps;
          $this->department = $dept;
          $this->gpa = $gpa;
          $this->password = password_hash($pass,PASSWORD_DEFAULT);


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
              $this->gpa . ' ' . print_r($this->marks) ;
               
   }

}