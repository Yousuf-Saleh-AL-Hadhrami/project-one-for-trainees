<?php 

// require './Car.php';
// require './Person.php';
// require './University.php';
// require './Course.php';
// require './Student.php';

require './autoload.php';

use Person\Person;
use Student\Student;
use College\Person as CollegePerson;

$person1 = new Person("Yousuf","Izki","35","Land Cruser", "White");

$person1->setModel(2025);

$student1 = new \Student\Student("Yousuf","Izki","35","Land Cruser", "White",100,"IT","Progamming");
$student1->registerStudent("Nizwa University")
         ->registerCourses(["c++","python","math","java"]);
         //->registerCourses([]);

echo $student1->getInfo();
echo "<br> ==================================================<br>";

$collegePerson = new CollegePerson;
echo $collegePerson->getInfo();
         