<?php 

session_start();

if(!isset($_SESSION['is_loggin']) || $_SESSION['role'] != 'admin'){

    header("location: ./../public/login.php");
    exit;
}

require_once './../../includes/header.php';
require_once './../../includes/config.php';
require_once './../../includes/navbar.php';

?>

<div class="container">

<h1 class="text-center my-3 ">Manage Departments</h1>

<?php 
 $query = "SELECT * FROM departments ";
 $result = mysqli_query($connection,$query) or die("Error in Query ". mysqli_error($connection));
 $count = mysqli_num_rows($result);

 if ($count == 0)
 {
    echo "<div class='alert alert-danger'>No Departments Found!</div>";
 } else {?>

<a href="create.php" class="btn btn-info btn-sm">Add New Dept</a>
 <table class="table table-bordred table-hover text-center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Proccess</th>
 </tr>

 <?php 

      while( $user = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>$user[id]</td>";
        echo "<td>$user[dname]</td>";
        echo '
        <td>
            <a href="edit.php" class="btn btn-primary btn-sm">Edit</a>
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
