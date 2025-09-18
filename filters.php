<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
</head>
<body>
    <?php 
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if ($username !== null) {
    $username = trim($username);
    $username = filter_var($username, FILTER_VALIDATE_INT);
}

if ($password !== null) {
    $password = trim($password);
    $password = filter_var($password, FILTER_VALIDATE_INT);
}

         
?>

<form action="" method="post">
    <input type="text" name="username" id="">
    <input type="text" name="password" id="">
    <input type="submit" value="Login">

</form>
</body>
</html>