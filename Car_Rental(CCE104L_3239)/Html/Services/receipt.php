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
    <link rel="stylesheet" href="receipt_design.css">
    <title>RUBEN</title>
</head>
<body>
    <div class="main">
        <div class="topnav">
            <ul class="navbar"> 
                <div class="Car_icon">
                    <img id="car-logo" src="../Photos/Car Logo/Ruben Car Rental(3).png" >
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
        <div class="receipt">
            <img src="../Photos/Car Logo/Ruben Car Rental(3).png" alt="car_logo" width="100%" height="100px">
            <h2>Receipt</h2>
            <form action="../DATABASE/receipt_query_copy.php" method="POST">
                <p class="fill">Fullname: <?php echo htmlspecialchars($_SESSION['full_name_receipt']);?></p><br>
                <p class="fill">Email: <?php echo htmlspecialchars($_SESSION['email']);?></p><br>
                <p class="fill">Contact No: <?php echo htmlspecialchars($_SESSION['contact_receipt']);?></p><br>
                <p class="fill">Address: <?php echo htmlspecialchars($_SESSION['address_receipt']);?></p><br>
                <p class="fill">Vehicle type: <?php echo htmlspecialchars($_SESSION['cartype_receipt']);?></p><br>
                <p class="fill">Preferred Manufacturer: <?php echo htmlspecialchars($_SESSION['vehicle_receipt']);?></p><br>
                <p class="fill">Pick up Date: <?php echo htmlspecialchars($_SESSION['pickdate_receipt']);?></p><br>
                <p class="fill">Return Date: <?php echo htmlspecialchars($_SESSION['returndate_receipt']);?></p><br>
                <p class="fill">Payment: <?php echo htmlspecialchars($_SESSION['downpay_receipt']);?></p><br>
                <p class="fill">Payment Method: <?php echo htmlspecialchars($_SESSION['modeofpay']);?></p><br>               
            </form>
                 <button class="fill-btn" ><a href="../Home/Home.php">THANK YOU</a></button>
        </div>
    <div>
</body>
</html>