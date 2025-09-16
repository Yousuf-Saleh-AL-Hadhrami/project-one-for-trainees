<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- This form is added in branch feature-x -->
<form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button type="submit">Login</button>
</form>

<hr>
<!-- Table -->

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
    </tr>

    <tr>
        <td>10</td>
        <td>Yousuf</td>
        <td>Izki</td>
        <td>
            <a href="edit.php?id=10">Edit</a>
            <a href="delete.php?id=10">Delete</a>
        </td>
    </tr>
</table>

</body>
</html>