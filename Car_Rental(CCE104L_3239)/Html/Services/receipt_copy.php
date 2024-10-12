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
            <div id="receipt-data">
                <p class="fill" id="fullname"></p><br>
                <p class="fill" id="email"></p><br>
                <p class="fill" id="contact-no"></p><br>
                <p class="fill" id="address"></p><br>
                <p class="fill" id="vehicle-type"></p><br>
                <p class="fill" id="preferred-manufacturer"></p><br>
                <p class="fill" id="pickup-date"></p><br>
                <p class="fill" id="return-date"></p><br>
                <p class="fill" id="payment"></p><br>
                <p class="fill" id="payment-method"></p><br>
            </div>
            <button class="fill-btn" ><a href="../Home/Home.php">THANK YOU</a></button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../DATABASE/receipt_query_copy.php">
        $(document).ready(function() {
            // Send an AJAX request to the PHP script every 1 second
            setInterval(function() {
                $.ajax({
                    type: "GET",
                    url: "../DATABASE/receipt_query_copy.php",
                    dataType: "json",
                    success: function(data) {
                        // Update the HTML elements with the fetched data
                        $("#fullname").text("Fullname: " + data.full_name_receipt);
                        $("#email").text("Email: " + data.email);
                        $("#contact-no").text("Contact No: " + data.contact_receipt);
                        $("#address").text("Address: " + data.address_receipt);
                        $("#vehicle-type").text("Vehicle type: " + data.cartype_receipt);
                        $("#preferred-manufacturer").text("Preferred Manufacturer: " + data.vehicle_receipt);
                        $("#pickup-date").text("Pick up Date: " + data.pickdate_receipt);
                        $("#return-date").text("Return Date: " + data.returndate_receipt);
                        //$("#payment").text("Payment: " + data.downpay_receipt);
                        //$("#payment-method").text("Payment Method: " + data.mop_receipt);
                    }
                });
            }, 1000);
        });
    </script>
</body>
</html>