<?php 

session_start();

if(!isset($_SESSION['is_loggin']) || $_SESSION['role'] != 'admin'){

    header("location: ./../../public/login.php");
    exit;
}

require_once './../../includes/header.php';
require_once './../../includes/config.php';
require_once './../../includes/navbar.php';

?>

<div class="container">

<h1 class="text-center my-3">Manage Users</h1>

<?php 
 $query = " SELECT users.* , departments.dname FROM users INNER JOIN departments
            ON departments.id = users.dept_id WHERE role != 'admin' ";
 $result = mysqli_query($connection,$query) or die("Error in Query ". mysqli_error($connection));
 $count = mysqli_num_rows($result);

 if ($count == 0)
 {
    echo "<div class='alert alert-danger'>No Users Found!</div>";
 } else {?>

<a href="create.php" class="btn btn-info btn-sm">Add New User</a>

<?php 
      if(isset($_SESSION['success']))
      {
        echo "<p class='alert alert-success'> $_SESSION[success]</p>";
        unset($_SESSION['success']);
      }

         if(isset($_SESSION['failed']))
      {
        echo "<p class='alert alert-warning'> $_SESSION[failed]</p>";
        unset($_SESSION['warning']);
      }
  ?>

 <table class="table table-bordred table-hover text-center">
    <tr>
        <th>ID</th>
        <th>username</th>
        <th>Name</th>
        <th>Department</th>
        <th>role</th>
        <th>Proccess</th>
 </tr>



 <?php 

      while( $user = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>$user[id]</td>";
        echo "<td>$user[username]</td>";
        echo "<td>$user[name]</td>";
        echo "<td>$user[dname]</td>";
        echo "<td>$user[role]</td>";
        echo '
        <td>
            <a href="edit.php?id='.$user['id'].'" class="btn btn-primary btn-sm">Edit</a>
            <a href="show.php" class="btn btn-info btn-sm">Show</a>
            <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
        </td>
        </tr>';
      }
?>

 </table>



<?php


 }
?>


</div>





<?php 

include './../../includes/footer.php';
