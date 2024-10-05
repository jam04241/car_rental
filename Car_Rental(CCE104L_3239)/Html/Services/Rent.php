<!DOCTYPE html>
<html lang="en">
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
                            <li><a id="dropdown4" href="../MAIN_EXE/login.php">Log Out</a></li>
                        </ul>
                    
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">  
            <div class="services">
                    <form>
                        <input type="text" id="valid" name="valid" placeholder="VALID ID:"><br>

                        <input type="text" id="license" name="license" placeholder="LICENSE:"><br>
                        
                        <input type="text" id="type" name="type" placeholder="TYPE:"><br>
                        
                        <input type="text" id="vehicle" name="vehicle" placeholder="VEHICLE:"><br>
                        
                        <input type="number" id="payment" name="payment" placeholder="PAYMENT:"><br>
                        <p class="pick">Pick up date:</p><br>
                        <input type="date" id="pickdate" name="pickdate" placeholder="Pick up date"><br>

                        <p class="pick">Return date:</p><br>
                        <input type="date" id="returndate" name="returndate" placeholder="Return date"><br>
                        
                        <button class="submit">NEXT</button>
                    </form>
                </div>
            </div>
        </div>
    <script src="Rent_script.js"></script>
</body>
</html>