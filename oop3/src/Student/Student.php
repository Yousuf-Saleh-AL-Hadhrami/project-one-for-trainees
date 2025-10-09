<?php 

namespace App\Student;

use App\Person\Person;
use App\University\University;
use App\Course\Course;

class Student extends Person implements University, Course {

    public $stdId;
    public $dept;
    public $major;
    public $uname;
    public $courses = [];

    public function __construct($n , $add , $ag, $carName , $carColor , $id , $dept , $major)
    {
        parent::__construct($n , $add , $ag, $carName , $carColor);

        $this->stdId = $id;
        $this->dept = $dept;
        $this->major = $major;
 
    }

    public function registerStudent($uname)
    {
         $this->uname = $uname;

         return $this;
    }

    public function admitStudent()
    {
        return $this->uname;
    }

     public function registerCourses($courses = [])
    {
         $this->courses = $courses;

         return $this;
    }

    public function getInfo()
    {
          $data = '';

          $data .= parent::getInfo();
          $data .= "and Student Id is {$this->stdId} <br>";
          $data .= "and Department is {$this->dept} <br>";
          $data .= "and Major is {$this->major} <br>";
          $data .= "and Registered is {$this->uname } <br>";
          $data .= "and admitted in  {$this->uname} <br>";
          $data .= "and Courses Registered are are ". implode(", ", $this->courses) . "<br>";


          

          return $data;

}

}