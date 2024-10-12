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
    <link rel="stylesheet" href="client_rent_design.css">
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
                            <li><a id="dropdown2" href="../Ciano2/services.php">VEHICLE CATEGORY</a></li>
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
        </div>
            <!-- CL2-->
            <div class="main3">
                <div class="payment_container">
                    <div class="payment">
                    <form  action="../DATABASE/client_rent_car.php" method="POST">
                            <p class="cl-id">Client Rental Information:</p>
                            <input type="text" id="valid" name="valid" placeholder="VALID ID:" autocomplete="off" required><br>

                            <input type="text" id="license" name="license" placeholder="LICENSE:" autocomplete="off" required><br>

                            <input type="number" id="rent_contact" name="rent_contact" placeholder="CONTACT NUMBER:" autocomplete="off" required><br>

                            <input type="text" id="rent_addrss" name="rent_addrss" placeholder="ADDRESS:" autocomplete="off" required><br>

                            <label for="vehicle-selection"></label>                    
                                            <select id="car_type" name="car_type" autocomplete="off" required>
                                                <option value="" disabled selected>Select Vehicle Type</option>
                                                <option value="suv">SUV</option>
                                                <option value="van">Van</option>
                                                <option value="sedan">Sedan</option>
                                                <option value="loaf">Loaf</option>
                                            </select><br>
                                                       
                            <label for="vehicle-manu-selection"></label>                    
                                            <select id="vehicle" name="vehicle" autocomplete="off" required>
                                                <option value="" disabled selected>Preferred Manufacturer</option>
                                                <option value="honda">Honda</option>
                                                <option value="nissan">Nissan</option>
                                                <option value="ford">Ford</option>
                                                <option value="toyota">Toyota</option>
                                            </select><br>
                            
                            <p class="pick">Pick up date:</p>
                            <input type="date" id="pick_date" name="pick_date" placeholder="Pick up date" autocomplete="off" required><br>

                            <p class="pick">Return date:</p>
                            <input type="date" id="return_date" name="return_date" placeholder="Return date" autocomplete="off" required><br>
                            
                            <button class="submit">NEXT</button>
                        </form>
                    </div>
            </div>
    </div>
    <script src="support_rent_script.js"></script>
</body>
</php>