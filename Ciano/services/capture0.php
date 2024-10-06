<?php
/*session_start();


if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Available</title>
    <link rel="stylesheet" href="car_transac.css">
</head>
<body>
    <h1>Honda civic</h1>
        <div class="container">
            <img class="set1images"src="Capture0.jpg">
                <div class="user-fields">
                    <input class ="field" type="text" name="name" placeholder="name" required><br>
                    <input class ="field" type="text" name="email" placeholder="email" required><br>
                    <input class ="field" type="text" name="pay mode" placeholder="Pay mode" required><br>
                    <input class ="field" type="text" name="address" placeholder="Address" required><br>
                    <input class="field" type="text" name="ponenumber" placeholder="Pone number" required><br>
                </div> 
            
        </div>
 
        
</body>   
</html>         