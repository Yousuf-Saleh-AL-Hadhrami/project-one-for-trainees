<?php 

// Way One  uses mysqli_procedural way 

$hostname = "localhost"; 
$username = "root";
$database = "project1";
$password = "";

$connection = mysqli_connect($hostname, $username , $password , $database);

if(!$connection)
{
   echo "Faild to Connect to database";
}

