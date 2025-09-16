<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php 

require_once "./includes/dbconnect.php";


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = " SELECT * FROM users WHERE username = '$username' ";
    $result = mysqli_query($connection , $query);
    $user = mysqli_fetch_assoc($result);

    // var_dump($user);

    $usernameError = '';

    if(!$user){

         echo "error user not found";
    } else {

        if(password_verify($password, $user['password'])){

            $_SESSION['is_login'] = true;
            $_SESSION['name'] = $user['name'];

            header("location:dashboard.php");
            exit;

    
        }
    }
}

        



?>


  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px;">
      <h4 class="mb-3 text-center">Login</h4>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username">

        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>


</body>
</html>
