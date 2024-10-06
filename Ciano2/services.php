<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Available</title>
    <link rel="stylesheet" href="cars1.css">
</head>
<body>


    <h1>SEDAN</h1>
    <div class="imageset1">
        <div class="image-container">
            <img class="set1images" src="Capture0.jpg">
            <a href="capture0.php"><button class="image-button">View details</button></a>
            <div class="description"></div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture1.jpg">
            <a href="capture1.php"><button class="image-button">View details</button></a>
            <div class="description">Honda</div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture2.jpg">
            <a href="capture2.php"><button class="image-button">View details</button></a>
            <div class="description">Honda</div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture3.jpg">
            <a href="capture3.php"><button class="image-button">View details</button></a>
            <div class="description">Honda</div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture4.jpg">
            <a href="capture4.php"><button class="image-button">View details</button></a>
            
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture5.jpg">
            <a href="capture5.php"><button class="image-button">View details</button></a>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture6.jpg">
            <a href="capture6.php"><button class="image-button">View details</button></a>
        </div>
    </div>

    <h2>SUV</h2>
<div class="imageset2">
    <div class="image-container">
        <img class="set2images" src="van.jpg">
        <a href="cap7.php"><button class="image-button">View Details</button></a>
    </div>
    <div class="image-container">
        <img class="set2images" src="ss.jpg">
        <a href="cap8.php"><button class="image-button">View Details</button></a>
    </div>
    <div class="image-container">
        <img class="set2images" src="dd.jpg">
        <a href="cap9.php"><button class="image-button">View Details</button></a>
    </div>
    <div class="image-container">
        <img class="set2images" src="er.jpg">
        <a href="cap10.php"><button class="image-button">View Details</button></a>
    </div>
    <div class="image-container">
        <img class="set2images" src="tr.jpg">
        <a href="cap11.php"><button class="image-button">View Details</button></a>
    </div>
    <div class="image-container">
        <img class="set2images" src="uu.jpg">
        <a href="cap12.php"><button class="image-button">View Details</button></a>
    </div>
    <div class="image-container">
        <img class="set2images" src="Capture6.jpg">
        <a href="cap13.php"><button class="image-button">View Details</button></a>
     </div>
    </div>

    </div>

</body>
</html>

