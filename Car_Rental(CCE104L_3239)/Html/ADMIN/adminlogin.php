<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>RUBEN</title>
    <link rel="stylesheet" href="../ADMIN/admin_css/adminlogin_design.css">
    
</head>
<body>
    <div class="main">
        <div class="bgvideo">
            <video autoplay muted loop playsinline id="video">
                <source src="../bg_video/video_bg(1).webm">
            </video>
        </div>
        <div class="bg-overlay"></div>  

        <div class="log-box">
            <div class="logo-wrapper">
                <img id="car_logo" src="../ADMIN/admin_pictures/Ruben_Car_Rental(7).png">
            </div>
            <section>
                <form action="admin_login_query.php" method="POST">
                    <input type="email" id="email" name="email" placeholder="Enter Email" autocomplete="off" required>
                    <input type="password" id="pass" name="pass" placeholder="Enter Password" autocomplete="off" required>  
                     
            <div class="checkbox">  
                <p id="remember"><input type="checkbox" id="checkbox"> <label type="text" id="check_btn">Remember me</label>
                </p>
            </div>
                <p id="login-container">
                    <button id="btn" type="submit" name="login" id="login" style="color: #ffffff">Login</button>    
                </p>
                </form>
            </section> 
        </div>
    </div>
</body>
</php>