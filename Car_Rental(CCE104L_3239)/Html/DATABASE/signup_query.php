<?php
session_start();

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$sex = $_POST["sex_select"];
$email = $_POST["email"];
$pass = $_POST["pass"];

//password hash
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    try {
        // Connect to database
        require "../DATABASE/connect_db.php";

        // Prepare SQL query
        $query= "INSERT INTO tbl_userlogin(Fname,Lname,Gender,email,password,pass_verify) VALUES(?,?,?,?,?,?)";
        $stmt = $pdo->prepare($query);

        // Execute SQL query
        $stmt->execute([$fname,$lname, $sex, $email, $pass_hash,$pass]);
        
        //echo "<script>window.location.href='../MAIN_EXE/signUp.php';</script>";
        echo "<script>alert('You succesfully created an account');</script>";
        echo "<script>window.location.href='../MAIN_EXE/Login.php';</script>";
        
        exit();
    } catch (PDOException $e) {
        // Log error and provide informative error message
        error_log("Database error: " . $e->getMessage());
        echo "<script>alert('Database error. Please try again later.');</script>";
    }
