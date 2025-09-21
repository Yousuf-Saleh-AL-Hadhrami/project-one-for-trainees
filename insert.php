<?php 

require "database.php";

$query = " INSERT INTO users (id ,name , username , password , role )
            VALUES 
            (2, 'Mohammed AL Obidani','mohamed', '". password_hash('123456', PASSWORD_DEFAULT) ."' , 'user')
            ";

if(mysqli_query($connection , $query))
{
   echo "Data Inserted Successfully !";
}