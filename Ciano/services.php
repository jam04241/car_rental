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

    <h1>Honda</h1>
    <div class="imageset1">
        <div class="image-container">
            <img class="set1images" src="Capture0.jpg">
            <a href="user.php"><button class="image-button">View details</button></a>
            <div class="description"></div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture1.jpg">
            <button class="image-button">View Details</button>
            <div class="description">Honda</div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture2.jpg">
            <button class="image-button">View Details</button>
            <div class="description">Honda</div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture3.jpg">
            <button class="image-button">View Details</button>
            <div class="description">Honda</div>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture4.jpg">
            <button class="image-button">View Details</button>
            
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture5.jpg">
            <button class="image-button">View Details</button>
        </div>
        <div class="image-container">
            <img class="set1images" src="Capture6.jpg">
            <button class="image-button">View Details</button>
        </div>
    </div>

    <h2>SUV</h2>
    <div class="imageset2">
        <div class="image-container">
            <img class="set2images" src="Capture0.jpg">
            <button class="image-button">View Details</button>
        </div>
        <div class="image-container">
            <img class="set2images" src="Capture1.jpg">
            <button class="image-button">View Details</button>
        </div>
        <div class="image-container">
            <img class="set2images" src="Capture2.jpg">
            <button class="image-button">View Details</button>
        </div>
        <div class="image-container">
            <img class="set2images" src="Capture3.jpg">
            <button class="image-button">View Details</button>
        </div>
        <div class="image-container">
            <img class="set2images" src="Capture4.jpg">
            <button class="image-button">View Details</button>
        </div>
        <div class="image-container">
            <img class="set2images" src="Capture5.jpg">
            <button class="image-button">View Details</button>
        </div>
        <div class="image-container">
            <img class="set2images" src="Capture6.jpg">
            <button class="image-button">View Details</button>
        </div>
    </div>

    <a href="logout.php"><input type=button value=logout name=logout></a>

</body>
</html>

