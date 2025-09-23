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

<h1 class="text-center my-3">Edit User </h1>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $dept_id = $_POST['dept_id'];
    
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
       $update_query = " UPDATE users SET name = '$name',
                                          username = '$username',
                                          role = '$role',
                                          dept_id = '$dept_id'
                                          
                                           ";
                         
       $value =  mysqli_query($connection , $update_query) or die(mysqli_error($connection));

       if($value)
       {
          $_SESSION['success'] = 'تم تعديل بيانات المستخدم';

          header("location: index.php");
          exit;
          
       } else {

          $_SESSION['failed'] = ' حدث خطأ';
           
       }
    }
}


$id = isset($_GET['id']) ? $_GET['id'] : intval($_GET['id']); // make it integer

$getUserId = " SELECT id FROM users  WHERE id = $id";
$res = mysqli_query($connection,$getUserId);

$check = mysqli_fetch_assoc($res);

if(!$check){

    echo "<div class='alert alert-danger'>User Not Found!</div>";
    header("refresh:3; url=index.php");
    exit;
}

$query = " SELECT users.id , users.name , users.username , users.role , users.dept_id FROM users
              WHERE id = $id";

$result = mysqli_query($connection,$query);
$user = mysqli_fetch_assoc($result);


?>

<div class="container mt-5">
  <h2 class="mb-4">Edit User</h2>
  <form action="" method="POST">
    
    <!-- Name -->
    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" value="<?= $user['name'] ?>" >
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
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?= $user['username'] ?>" >
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
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>


</div>





<?php 

include './../../includes/footer.php';
