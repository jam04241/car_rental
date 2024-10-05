<?php
session_start();
$car_type = $_POST["car_type"];
$license_no = $_POST["license_no"];
$vehicle = $_POST["vehicle"];
$date_pickup= $_POST["date_pickup"];
$date_return = $_POST["date_return"];

try{
    require"connect_db.php";

}
    catch(PDOException $e){
        die("Could not connect to the database: " . $e->getMessage());
    }