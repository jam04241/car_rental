<?php 

session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    header("Location: loginpage.php");
}
else {
    header("Location: loginpage.php");
}

?>