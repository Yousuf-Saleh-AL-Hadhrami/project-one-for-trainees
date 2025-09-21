<?php 

if(!isset($_SESSION['id']))
{
   
// die("User is unauthorized!");
   echo "<h1> User is not Allowed to complete </h1>";

   sleep(5);

   header("location: ../login.php ");
   exit;

}
