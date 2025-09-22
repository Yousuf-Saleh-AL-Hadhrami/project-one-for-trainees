<?php 
session_start();

include_once "./../includes/header.php";
include_once "./../includes/config.php";

$error= '';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = " SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    if(!$user)
    {
      $error = 'Username is incorrect!';

    }else {

      if(password_verify($password, $user['password']))
      {
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['is_loggin'] = true;

        if($_SESSION['role'] == 'admin')
        {

            header("location: ./../admin/dashboard.php");
            exit;
        } else {

             header("location: ./../user/profile.php");
            exit;

        }

      } else {

        $error = 'Password is incorrect!';
      }
    } 

}


?>

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
      <h4 class="mb-4 text-center">Login</h4>
      <?php 
        if(!empty($error))
        {
          echo "<p class='alert alert-danger'>$error</p>";
        }
      ?>
      
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
        <!-- Username -->
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="" >
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>

