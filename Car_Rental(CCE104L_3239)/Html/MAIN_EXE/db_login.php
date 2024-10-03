
<?php
// Start of PHP code
$host = "localhost"; // Use direct values or fetch them securely
$username = "root"; // Change as needed
$pass = ""; // Change as needed
$dbname = "db_carrental";

// Create a new connection
$con = new mysqli($host, $username, $pass, $dbname);

// Check for connection errors
if ($con->connect_error) {
    die("<script>alert('Connection failed: " . $con->connect_error . "');</script>");
}

// Create database if it does not exist
$con->query("CREATE DATABASE IF NOT EXISTS $dbname");
$con->select_db($dbname);

// Create the user login table if it does not exist
$con->query("CREATE TABLE IF NOT EXISTS tbl_userlogin (
    USER_ID INT NOT NULL AUTO_INCREMENT,
    Fname VARCHAR(50) NOT NULL,
    Lname VARCHAR(50) NOT NULL,
    Gender VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (USER_ID)
)");

// Handle the login functionality
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement
    $stmt = $con->prepare("SELECT email, password FROM tbl_userlogin WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password); // Bind both email and password parameters
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Login successful. Welcome to RUBEN Car E-Rental!');</script>";
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
    }

    $stmt->close();
}
$con->close();
?>
