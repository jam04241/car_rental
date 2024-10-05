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
    <link rel="stylesheet" href="Rent_design.css">
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
                            <li><a id="dropdown1" href="#">CUSTOMER SERVICE</a></li>
                            <li><a id="dropdown2" href="../For Rent_btn/Rent.php">VEHICLE CATEGORY</a></li>
                        </ul>

                </li>
                <li><a href="../Contact/Contact.php">CONTACT</a>
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
        </div>
        <div class="container">  
            <div class="services">
                <form>
                    <input type="text" id="license" name="license" placeholder="LICENSE:"><br>
                    
                    <input type="text" id="type" name="type" placeholder="TYPE:"><br>
                    
                    <input type="text" id="vehicle" name="vehicle" placeholder="VEHICLE:"><br>
                    
                    <input type="number" id="payment" name="payment" placeholder="PAYMENT:"><br>
                    <label id="date1">Pick up Date:</label>
                    <input type="date" id="date" name="date" placeholder="Pick up date"><br>
                    
                    <button class="submit">NEXT</button>
                </form>
            </div>
    </div>
    </div>
    <script src="Rent_script.js"></script>
</body>
</php>