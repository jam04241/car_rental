<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUBEN</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <div class="main">  
        <div class="container">
            <div class="log-box">
                <div class="logo-wrapper">
                    <img id="car_logo" src="../Photos/Car Logo/Ruben_Car_Rental(7).png">
                </div>
            <form id="form" action="../DATABASE/signup_query.php" method="POST">
            <input type="text" id="fname" name="fname" placeholder="First Name" required><br>
            <input type="text" id="lname"name="lname" placeholder="Last Name" required><br>
            <select id="sex_select" name="sex_select" required>
                <option id="sex" value="" disabled selected>Sex</option>  
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>
            <input type="email" name="email" placeholder="Enter Email" autocomplete="off" required><br>
            <input type="password" id="pass" name="pass" placeholder="Create Password" autocomplete="off" required><br>
            <input type="password" id="con_pass"name="con_pass" placeholder="Confirm Password" autocomplete="off" required>
            <button class="btn" id="confirm" name="confirm">Confirm</button><br>
            <a href="login.php" id="Login_in">Back to Login</a>
            </form>

        </div>

        <div class="bgvideo">
            <video autoplay muted loop playsinline id="video">
                <source src="../bg_video/video_bg.webm">
            </video>
        </div>
    </div>
    </body>
</html>
