<?php
session_start();
$email= $_POST["email"];
$pass= $_POST["pass"];

try{
    require"connect_db.php";

    if (isset($_POST['login'])) {
    
        // Prepare and execute the SQL statement
        $query = "SELECT password FROM tbl_userlogin WHERE email = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);   
        $pass_result = $stmt->fetchColumn(); // PDO::FETCH_ASSOC

        if ($pass_result && $pass == $pass_result) {
            $_SESSION["email"] = $email;
            echo "<script>alert('Login successful. Welcome to RUBEN Car E-Rental!');</script>";
            echo "<script>window.location.href = '../Home_html/Home.php';</script>";
            
        } else {
            echo "<script>alert('Invalid email or password.');</script>";
            echo "<script>window.location.href='../MAIN_EXE/Login.php';</script>";
        }
    }
    
}
catch(PDOException $e){
    die("Could not connect to the database: " . $e->getMessage());
}   

