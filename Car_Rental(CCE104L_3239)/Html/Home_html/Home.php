<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Home_design.css">
    <title>RUBEN</title>
</head>
<body>
    <?PHP
    session_start();
     ?>
    <div class="main">
        <div class="topnav">
            <ul class="navbar">
                <div class="Car_icon">
                    <img id="car-logo" src="/CACA/Car_Rental(CCE104L_3239)/Html/Photos/Car Logo/Ruben Car Rental(3).png" >
                </div>
                <li></li>
                <li><a href="/CACA/Car_Rental(CCE104L_3239)/Html/Home_html/Home.html">HOME</a></li>
                <li><a href="/CACA/Car_Rental(CCE104L_3239)/Html/About_html/About.html">ABOUT</a></li>
                <li>  
                    <a href="#" id="Service">SERVICES</a>

                        <ul class="drop_service">
                            <li><a id="dropdown1" href="support.html">CUSTOMER SERVICE</a></li>
                            <li><a id="dropdown2" href="vehicle.html">VEHICLE CATEGORY</a></li>
                        </ul>

                </li>
                <li><a href="/CACA/Car_Rental(CCE104L_3239)/Html/Contact_html/Contact.html">CONTACT</a>
                </li>
                <li>
                    <a href="#" id="profile">
                            <img id="profile_icon" src="/CACA/Car_Rental(CCE104L_3239)/Html/Photos/png_account.svg">
                    </a>
                        <ul class="drop_profile">
                            <li><a id="dropdown3" href="#" >Jam04241</a></li>
                            <li><a id="dropdown4" href="/CACA/Car_Rental(CCE104L_3239)/Html/MAIN_EXE/login.php">Log Out</a></li>
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
                <img src="/CACA/Car_Rental(CCE104L_3239)/Html/Photos/Vehicle.png" alt="vehicle" type="png" width="100" height="400">
                </div>
                <button id="rent-btn"><a href="/CACA/Car_Rental(CCE104L_3239)/Html/For Rent_btn/Rent.html">Rent</a></button>
        </div>
    </div>
    </div>
    <script src="Home_script.js"></script>
</body>
</html>