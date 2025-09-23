<?php 

// Way One  uses mysqli_procedural way 

$hostname = "localhost"; 
$username = "root";
$database = "mini_project";
$password = "";

$connection = mysqli_connect($hostname, $username , $password , $database);

if(!$connection)
{
   echo "Faild to Connect to database";
}


define('BASE_URL', '/mini-project/public/assets/');

