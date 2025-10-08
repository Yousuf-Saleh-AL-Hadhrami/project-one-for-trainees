<?php 

require './vendor/autoload.php';

use Moe1\Oop3\Person\Person;
use Moe1\Oop3\Student\Student;
use Moe1\Oop3\College\Person as CollegePerson;

use Carbon\Carbon;

$person1 = new Person("Yousuf","Izki","35","Land Cruser", "White");

$person1->setModel(2025);

$student1 = new Student("Yousuf","Izki","35","Land Cruser", "White",100,"IT","Progamming");
$student1->registerStudent("Nizwa University")
         ->registerCourses(["c++","python","math","java"]);
         //->registerCourses([]);

echo $student1->getInfo();
echo "<br> ==================================================<br>";

$collegePerson = new CollegePerson;
echo $collegePerson->getInfo();

echo "<br>";


$now = Carbon::now();
$now->setlocale('ar');


$pastDate = Carbon::parse('2025-10-01');

echo $pastDate->diffForHumans($now); // Output: "1 week ago"

         