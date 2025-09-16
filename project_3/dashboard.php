<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

 <div class="container">
<?php 
session_start();

 echo "Welcome ". $_SESSION['name'];
            echo "<br>";
            echo "<a href='logout.php'>Logout</a>";
?>

            <table class="table table-bordered table-hover text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Job</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
             require_once  "./includes/dbconnect.php";

            $query = " SELECT * FROM  users";
            $data = mysqli_query($connection , $query);

            while($user = mysqli_fetch_assoc($data)){

                echo "<tr>
                      <td>$user[id]</td>
                      <td>$user[username]</td>
                      <td>$user[name]</td>
                      <td>$user[role]</td>
                      <td>
                      <a href='edit.php?id=$user[id]' class='btn btn-primary'>Edit</a>
                      <a href='delete.php?id=$user[id]' class='btn btn-danger'>Delete</a>

                      <td>
                      

                
                </tr>";
            }

            ?>
        </tbody>

        <tfoot>
            <tr>
                <th colspan="5">Footer</th>
            </tr>
        </tfoot>
       </table>
    
</body>
</html>