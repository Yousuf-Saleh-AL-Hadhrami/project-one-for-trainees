<?php 

header("location:login.php");
exit;


echo "Welcome to PHP";
echo "<br>";
$value = print "Welcome to PHP";
echo "<br>";
echo $value;
echo "<br>";

$language = "PHP";

echo '<h1> I Like $language PROGRAMMING </h1>';
echo "<br>";
echo "<h1> I Like $language PROGRAMMING </h1>";

echo "<br>";

$name = "Salim"; // string
$age = 20; // integer
$salary = 500.30; // double or float
$job = true;  // boolean bool
$hobbies = ["Footabll","Programming","Swimming"]; // array
$passed_exam = null; // null

class Person {

}

$person = new Person(); // object

echo "<br>";
echo gettype($hobbies);
echo "<br>";
echo is_integer($salary); // false not printed and true prints 1
echo "<br>";

// loops in php  [ for loop , while loop , do while loop , foreach loop ]
// Arrays in php [ indexed Array , Associative Array , Multdieminsinal Array ]
// Arithmetic Operators , Logical Operators , Comparison Operators , Assignment Operators 
// Variables and Constants and Magic Constants
// Superglobal Variables or predefined variables [$GLOBALS , $_GET , $_POST , $_SERVER, $_REQUEST , $_SESSION , $_COOKIES , $_FILES , $_ENV]
// PASSING DATA BETWEEN PAGES using $_GET AND POST 
// Include and require
// FORM SUBMISSION
// FORM VALIDATION 
// FILTERS 
// DATE AND TIMES 
// regular expressions 
// LOGIN AND LOGOUT using session 
// Connecting TO DATABASE  using mysqli procedureal way and oop way and using PDO. 
// CRUD Operations 
// Filesystem 
// PHP OOP object oriented programming 
// MVC design patteren 
// Dependency Injection 
// Laravel FrameWork. 


echo "<br>";
echo "<br>";



