<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

echo "Welcome to the dashboard, " . htmlspecialchars($_SESSION['name']) . "!";
echo "<br>";
echo '<a href="logout.php">Logout</a>';