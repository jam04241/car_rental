<?php

session_start();
$username=$_POST["username"];
$password=$_POST["password"];

try {
    require"databasecon.php";

    
    $query = "SELECT password FROM tbl_userlogin WHERE email = ? ";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username]);
    $databasepassword = $stmt->fetchColumn();

    
    if ($databasepassword && $password===$databasepassword) {
        $_SESSION['username'] = $username;
        header("Location:services.php");
        exit();
        
    } else {
        header("Location:loginpage.php");
        exit();
    }
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}


