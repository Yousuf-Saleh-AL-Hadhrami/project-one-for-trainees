<?php 

session_start();

require "../authorize.inc.php";


echo "Welcome to the dashboard, " . htmlspecialchars($_SESSION['name']) . "!";
echo "<br>";
echo '<a href="logout.php">Logout</a>';