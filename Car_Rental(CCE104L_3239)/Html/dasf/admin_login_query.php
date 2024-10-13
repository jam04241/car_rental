<?php

session_start();
$email = $_POST["email"];
$pass = $_POST["pass"];

try {
    // Connect to database
    require "connect_db.php";

    // Prepare and execute the SQL statement to retrieve the hashed password for the provided email
    $query = "SELECT password FROM tbl_admin WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);   
    $mypass = $stmt->fetchColumn();

    if($pass == $mypass){
        echo "<script>alert('Welcome ADMIN!');</script>";
        echo "<script>window.location.href = 'Admin-user-update.php';</script>";
    }
    else{
        echo "<script>alert('invalid credentials');</script>";
        echo "<script>window.location.href = 'adminlogin.php';</script>";

    }
    exit();
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
