<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location:../MAIN_EXE/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Customer_design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RUBEN</title>
</head>
<body>
    <div class="main">
        <div class="topnav">
            <ul class="navbar">
                <div class="Car_icon">
                    <img id="car-logo" src="../Photos/Car Logo/Ruben Car Rental(3).png">
                </div>
                <li></li>
                <li><a href="../Home/Home.php">HOME</a></li>
                <li><a href="../About/About.php">ABOUT</a></li>
                <li>  
                    <a href="#" id="Service">SERVICES</a>

                        <ul class="drop_service">
                            <li><a id="dropdown1" href="../Services/Cust_Serv.php">CUSTOMER SERVICE</a></li>
                            <li><a id="dropdown2" href="#">VEHICLE CATEGORY</a></li>
                        </ul>

                </li>
                <li><a href="../Contact/Contact.php">CONTACT</a>
                </li>
                <li>
                    <a href="#" id="profile">
                            <img id="profile_icon" src="../Photos/png_account.svg">
                    </a>
                        <ul class="drop_profile">
                            <li><a id="dropdown3" href="#" ><?php echo htmlspecialchars($_SESSION['email']);?></a></li>
                            <li><a id="dropdown4" href="../DATABASE/logout.php">Log Out</a></li>
                        </ul>
                    
                </li>
            </ul>
        </div>

        <div class="form-container">
                
            <div class="form">
                <h1>We are available 24/7</h1>
                <p>Explore our help Docs or Contact Us</p>
                <form action="../DATABASE/cust_service.php" method="POST">
                <input type="text" id="fullname" name="fullname"placeholder="Fullname" autocomplete="off" required>
                <input type="number" id="cust_contact_no" name="cust_contact_no"placeholder="Contact No" autocomplete="off" required>
                <input type="text" id="cust_addrss" name="cust_addrss"placeholder="Address" autocomplete="off" required>
                <textarea type="text" id="msgs" name="msgs"placeholder="Message Here!"></textarea>
                <button class="submit">Click to Submit</button>
                
                    <div class="icon-container">
                        <a href="https://web.facebook.com/Ramssukasaha"><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-solid fa-phone"></i></a>
                        <a href="https://mail.google.com/mail/u/0/?hl=en-GB#sent"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </form>
            </div>
        </div>   
    </div>
    <script src="Customer_script.js"></script>
</body>
</html>