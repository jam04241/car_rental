<?php


$dbusername="root";
$dbpassword="";

    try{
        $dsn = "mysql:host=127.0.0.1; port=3306; dbname=RUBEN_carrental";
        $pdo=new PDO($dsn,$dbusername,$dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
    }

