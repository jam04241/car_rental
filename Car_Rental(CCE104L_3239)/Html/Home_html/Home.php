<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:../MAIN_EXE/login.php");
    exit();
}
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Home_design.css">
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
                <li><a href="../Home_html/Home.php">HOME</a></li>
                <li><a href="../About_html/About.php">ABOUT</a></li>
                <li>  
                    <a href="#" id="Service">SERVICES</a>

                        <ul class="drop_service">
                            <li><a id="dropdown1" href="support.php">CUSTOMER SERVICE</a></li>
                            <li><a id="dropdown2" href="vehicle.php">VEHICLE CATEGORY</a></li>
                        </ul>

                </li>
                <li><a href="../Contact_html/Contact.php">CONTACT</a>
                </li>
                <li>
                    <a href="#" id="profile">
                            <img id="profile_icon" src="../Photos/png_account.svg">
                    </a>
                        <ul class="drop_profile">
                            <li><a id="dropdown3" href="#" >Jam04241</a></li>
                            <li><a id="dropdown4" href="../DATABASE/logout.php">Log Out</a></li>
                        </ul>
                </li>
            </ul> 
        </div>
        <div class="main-Container">
            <div class="Container">
              <p id="p-Container">
                <h1 id="h1-Container">Car Rental Business</h1>
                    We understand the importance of reliable transportation. 
                    Whether you’re planning a weekend getaway, a business trip, 
                    or need a temporary vehicle, we’ve got you covered. Our extensive 
                    fleet of well-maintained vehicles ensures that you’ll find the 
                    perfect car to suit your needs and budget. 
                </p>
                <div class="picture">
                <img src="../Photos/Vehicle.png" alt="vehicle" type="png" width="100" height="400">
                </div>
                <button id="rent-btn"><a href="../For Rent_btn/Rent.php">Rent</a></button>
        </div>
    </div>
    </div>
    <script src="Home_script.js"></script>
</body>
</php>