<?php

session_start();
$email = $_POST["email"];
$pass = $_POST["pass"];

try {
    // Connect to database
    require "connect_db.php";

    // Prepare and execute the SQL statement to retrieve the hashed password for the provided email
    $query = "SELECT password FROM tbl_userlogin WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);   
    $hash = $stmt->fetchColumn();

    // Check if the email exists and verify the password
    if ($hash && password_verify($pass, $hash)) {
        // Password matches, start the session
        $_SESSION["email"] = $email;
        echo "<script>alert('Login successful. Welcome to RUBEN Car E-Rental!');</script>";
        echo "<script>window.location.href = '../Home/Home.php';</script>";
    } else {
        // Password does not match or email not found
        echo "<script>alert('Invalid email or password.');</script>";
        echo "<script>window.location.href='../MAIN_EXE/Login.php';</script>";
        
    }
    $select =("SELECT ID_ACC from tbl_userlogin WHERE password = {$pass}");
    $insert =('INSERT INTO tbl_client_rent (id_acc) VALUES({$SELECT})');

    exit();
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
