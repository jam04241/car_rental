<?php

$username=$_POST["name"];
$address=$_POST["address"];
$lastname=$_POST["lastname"];

try{
require_once "databasecon.php";
$query="INSERT INTO userdetails(name,address,lastname) VALUES (?,?,?);";
$stmt=$pdo->prepare($query);
$stmt->execute([$username,$address,$lastname]);
}
catch(PDOException $e){
    die("Could not connect to the database :" . $e->getMessage());
}