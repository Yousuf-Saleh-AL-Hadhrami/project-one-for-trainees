<?php 

require './Person.php';
require './Student.php';
require './Course.php';


$p1 = new Person("Yousuf AL Hadhrami","Izki","Male", "Football","Programming","Swimming");

$student1 = new Student("Yousuf AL Hadhrami","Izki","Male","Software Engineering","IT");
$student2 = new Student("AL Shima","Izki","Female",300, "Software Engineering","IT",3.9);
$student3 = new Student("Ruwaida AL Tobi","Nizwa","Female",500, "Software Engineering","IT");
$student4= new Student("Mashael","Izki","Female",400, "Software Engineering","IT",3.8);
$student5= new Student("Rahaf","Nizwa","Female",600, "Software Engineering","IT",3.5);


// echo $p2 = (new Person("Mashael","Izki","Female"))
//        ->setName("AL Shaima")
//        ->setAddress("Izki") 
//        ->setGender("Female")
//        ->setAge(18)
//        ->getInfo();

// echo "<br>";

// $p3 = new Person("Rahaf","Nizwa","Female");

// //$p1->name = "Yousuf AL Hadhrami";
// // $p1->setName("Yousuf AL Hadhrami");
// // $p1->setAddress("Izki");
// // $p1->setGender("Male");

// // Method Chaining 

// echo $p1->getInfo();
// echo "<br>";

// echo $p3->getInfo();

// echo "<br>";


// echo Person::$counter;
// echo "<br>";
// echo Person::getCounter();
//echo Person::AGE;



echo $student1->setGpa(3.3)->getInfo();
echo "<br>";
echo $student2->getInfo();
echo "<br>";
echo $student3->getInfo();echo "<br>";
echo $student4->getInfo();echo "<br>";
echo $student5->getInfo();echo "<br>";

var_dump($p1->gender);
var_dump($p1->skills);

//echo Student::AGE;