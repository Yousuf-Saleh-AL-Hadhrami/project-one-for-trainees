<?php 

try{

    $connection = mysqli_connect("localhost","root","","project3");
    
} catch(Exception $e){

    echo $e->getMessage();
}