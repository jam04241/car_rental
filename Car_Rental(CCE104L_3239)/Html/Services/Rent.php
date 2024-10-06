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
        <div class="main2">
            <div class="container">  
                <div class="cl_rent">
                        <form>
                            <p class="cl-id">Client Rental Information:</p>
                            <input type="text" id="valid" name="valid" placeholder="VALID ID:"><br>

                            <input type="text" id="license" name="license" placeholder="LICENSE:"><br>
                            
                            <input type="text" id="type" name="type" placeholder="TYPE:"><br>
                            
                            <input type="text" id="vehicle" name="vehicle" placeholder="VEHICLE:"><br>
                            
                            <p class="pick">Pick up date:</p>
                            <input type="date" id="pick_date" name="pick_date" placeholder="Pick up date"><br>

                            <p class="pick">Return date:</p>
                            <input type="date" id="return_date" name="return_date" placeholder="Return date"><br>
                            
                            <button class="submit">NEXT</button>
                        </form>
                </div>
            </div>

            <div class="sp_container">
                <div class="supporting_id">
                        <form>
                            <p class="sp-id">Supporting Identification:</p>

                            <input type="text" id="full_name" name="full_name" placeholder="FULL NAME:"><br>
                            
                            <input type="text" id="valid" name="valid" placeholder="VALID ID 1:"><br>

                            <input type="text" id="valid" name="valid" placeholder="VALID ID 2:"><br>

                            <input type="text" id="affiliation" name="affiliation" placeholder="AFFILIATION:"><br>
                            
                            <input type="text" id="address" name="address" placeholder="ADDRESS:"><br>
                            
                            <input type="number" id="contact number" name="contact number" placeholder="CONTACT NUMBER:"><br>
                            
                            <button class="submit">NEXT</button>
                        </form>
                </div>
            </div>
        </div>

        <div class="main3">
            <div class="payment_container">
                <div class="payment">
                    <form>
                        <p class="payment-method">Payment:</p>             
                        <input type="number" id="downpayment" name="downpayment" placeholder="DOWNPAYMENT:"><br>

                                <label for="payment-mode"></label></form>                     
                                <select id="payment-mode" name="payment-mode">
                                    <option value="" disabled selected>Select Payment Mode</option>
                                    <option value="e-pay">E-pay</option>
                                    <option value="cash">Cash</option>
                                    <option value="debit-card">Debit Card</option>
                                </select><br>

                        <button class="submit" name="submit">Submit</button>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="Rent_script.js"></script>
</body>
</php>