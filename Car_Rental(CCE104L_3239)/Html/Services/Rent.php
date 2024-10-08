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
        </div>
        <div class="main2">
            <!-- CL2-->

            <div class="sp_container">
                <div class="supporting_id">
                        <form action="../DATABASE/client_transact.php" method="POST">
                            <p class="sp-id">Supporting Identification:</p>

                            <input type="text" id="full_name" name="full_name" placeholder="FULL NAME:" autocomplete="off" required><br>
                            
                            <input type="text" id="valid1" name="valid1" placeholder="VALID ID 1:" autocomplete="off" required><br>

                            <input type="text" id="valid2" name="valid2" placeholder="VALID ID 2:" autocomplete="off" required><br>

                            <input type="text" id="affiliation" name="affiliation" placeholder="AFFILIATION:" autocomplete="off" required><br>
                            
                            <input type="text" id="addrss" name="addrss" placeholder="ADDRESS:" autocomplete="off" required><br>
                            
                            <input type="number" id="contact_no" name="contact_no" placeholder="CONTACT NUMBER:" autocomplete="off" required><br>

                                    <p class="payment-method">Payment:</p>             
                                    <input type="number" id="downp" name="downp" placeholder="DOWNPAYMENT:" autocomplete="off" required><br>
            
                                            <label for="modeofpay"></label>                    
                                            <select id="modeofpay" name="modeofpay" autocomplete="off" required>
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