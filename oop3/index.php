<?php 

require './vendor/autoload.php';

use App\Person\Person;
use App\Student\Student;
use App\College\Person as CollegePerson;
use Carbon\Carbon;

use App\Computer\Pc;
use App\HardWare\MotherBoard;
use App\HardWare\Ram;


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

echo "<br>";

$motherboard = new MotherBoard("Intel", "10");
$motherboard2 = new MotherBoard("DELL", "15");

$ram = new Ram("DDr4","32GB");

$pc1 = new Pc("Computer", $motherboard , $ram);

$pc1->setMotherBoard($motherboard2);

echo $pc1->getFeatures();


         