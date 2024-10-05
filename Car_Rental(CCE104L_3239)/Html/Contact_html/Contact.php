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
    <link rel="stylesheet" href="Contact_design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <div class="content">
                <form>
                    <h2>We are available 24/7</h2>
                    <p>Explore our Help Docs or Contact Us</p>
                    <input type="text" id="name" name="name" placeholder="NAME:"><br>
                    <input type="email" id="email" name="email" placeholder="Email:" autocomplete="off" required><br>
                    <input type="text" id="message" name="message" placeholder="MESSAGE:"><br>
                    <button class="sub">Submit</button>
                </form>
            <a href="https://www.facebook.com/haroldjohn.naquila.7"><i class="fa-brands fa-facebook"></i></a>
           <a href="https://www.google.com/maps/place/SM+City+Davao/@7.0492573,125.541435,14z/data=!4m6!3m5!1s0x32f973863a317321:0x5a0db64db28226cd!8m2!3d7.0496769!4d125.5883056!16s%2Fm%2F047rm3n?entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D"><i class="fa-solid fa-location-dot"></i></a>
            <a href="https://mail.google.com/mail/u/0/?hl=en-GB#sent"><i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.tiktok.com/explore"><i class="fa-solid fa-phone"></i></a>       
            </div>
        </div>
    <script src="Contact_script.js"></script>
    </body>
</php>