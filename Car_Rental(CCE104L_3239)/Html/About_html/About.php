<?php
/*if (!isset($_SESSION['username'])) {
    header("Location:../MAIN_EXE/login.php");
    exit();
}*/
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="About_design.css">
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
                            <li><a id="dropdown1" href="#">CUSTOMER SERVICE</a></li>
                            <li><a id="dropdown2" href="#">VEHICLE CATEGORY</a></li>
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

        </div>

        <div class="about-content">
            <p>
                Welcome to our Website! We are dedicated to providing the best service in the industry. 
                Our team of experts works tirelessly to ensure that every project is completed with the 
                highest level of quality and professionalism. With years of experience and a commitment 
                to excellence, we strive to exceed your expectations.
            </p>
        </div>
        <div class="column-content">
            <div class="column-content1">
                <h2>Why Choose Us?</h2>
            <p>
                We offer a wide variety of vehicles to suit every journey, 
                from compact cars for city trips to spacious SUVs for family adventures.
            </p>
            </div>
            <div class="column-content2">
                <h2>Values</h2>
            <p>
                We pride ourselves on three core values: Customer satisfaction, reliability, 
                and transparency. From transparent pricing to dependable customer sevice, we're 
                committed to ensuring every ride is smooth.
            </p>
            </div>
            <div class="column-content2">
                <h2>Vision</h2>
            <p>
                We envision a world where transportation is accessible to all, 
                offering flexibility and freedom to explore without boundaries. 
                Our goal is to lead the industry with innovation, customer-centric 
                service, and a focus on sustainable travel solutions.
            </p>
            </div>
        </div>
    </div>
    <script src="About_script.js"></script>
</body>
</php>