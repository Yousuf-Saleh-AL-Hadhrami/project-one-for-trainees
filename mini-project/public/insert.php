<?php 

require "./../includes/config.php";

$query = " INSERT INTO users (id ,name , username , password , role )
            VALUES 
            (1, 'Yousuf AL Hadhrami','admin', '". password_hash('123456', PASSWORD_DEFAULT) ."' , 'admin'),
            (2, 'Mashael AL Amri','user1', '". password_hash('123456', PASSWORD_DEFAULT) ."' , 'user'),
            (3, 'Rahaf AL Toobi','user2', '". password_hash('123456', PASSWORD_DEFAULT) ."' , 'user')

            ";

if(mysqli_query($connection , $query))
{
   echo "Data Inserted Successfully !";
}