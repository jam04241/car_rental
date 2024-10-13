<?php 

session_start();

if (isset($_SESSION['email'])) {
    session_destroy();
    header("Location:adminlogin.php");
}
else {
    header("Location:adminlogin.php");
}

?>