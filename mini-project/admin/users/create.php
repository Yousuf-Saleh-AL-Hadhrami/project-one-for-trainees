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

<h1 class="text-center my-3">Create New User</h1>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $dept_id = $_POST['dept_id'];
    
    $hashed_password = password_hash('123456', PASSWORD_DEFAULT);

    $errors = [];

    if(!$name)
    {
        $errors[] = 'إسم الشخص مطلوب';
    }

        if(!$username)
    {
        $errors[] = 'إسم المستخدم مطلوب';
    }

        if(!$role)
    {
        $errors[] = 'إختر الصلاحية';
    }

      if(!$dept_id)

    {
        $errors[] = 'إختر القسم التابع';
    }

    if(empty($errors))
    {
       $insert_query = " INSERT INTO users (name , username , password , role , dept_id)
                         VALUES 
                         ('$name','$username','$hashed_password','$role', $dept_id);
                         ";
       $value =  mysqli_query($connection , $insert_query) or die(mysqli_error($connection));

       if($value)
       {
          $_SESSION['success'] = 'تم إضافة مستخدم جديد';

          header("location: index.php");
          exit;
          
       } else {

          $_SESSION['failed'] = ' حدث خطأ';
           
       }
    }
}




?>

<div class="container mt-5">
  <h2 class="mb-4">Create New User</h2>
  <form action="" method="POST">
    
    <!-- Name -->
    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" >
      <?php 
        if(isset($errors[0]))
        {
            echo "<p class='text-danger'> $errors[0] </p>";
        }
      ?>
    </div>

    <!-- Username -->
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" >
         <?php 
        if(isset($errors[1]))
        {
            echo "<p class='text-danger'> $errors[1] </p>";
        }
      ?>
    </div>

    <!-- Role -->
    <div class="mb-3">
      <label for="role" class="form-label">Role</label>
      <select class="form-select" id="role" name="role" >
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>

    <!-- Department ID -->
    <div class="mb-3">
      <label for="dept_id" class="form-label">Department</label>
      <select class="form-select" id="dept_id" name="dept_id" >
        <!-- These options should be dynamically generated from the departments table -->
        <option value="">Select Department</option>
      <?php 
        $query = " SELECT id , dname FROM departments";
        $result = mysqli_query($connection , $query);

        while($dept = mysqli_fetch_assoc($result)){

            echo "<option value=$dept[id]> $dept[dname] </option>";
        }
       ?>
      </select>

    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Create User</button>
  </form>
</div>


</div>





<?php 

include './../../includes/footer.php';
