<?php 

session_start();

if(!isset($_SESSION['is_loggin']) || $_SESSION['role'] != 'admin'){

    header("location: ./../../public/login.php");
    exit;
}

require_once './../includes/header.php';
require_once './../includes/config.php';
require_once './../includes/navbar.php';

?>





<?php 

include './../includes/footer.php';
