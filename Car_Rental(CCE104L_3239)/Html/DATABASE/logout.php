<?php 

session_start();

if (isset($_SESSION['email'])) {
    session_destroy();
    header("Location:../MAIN_EXE/login.php");
}
else {
    header("Location:../MAIN_EXE/login.php");
}

?>