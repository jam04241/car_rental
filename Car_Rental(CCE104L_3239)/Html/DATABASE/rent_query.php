<?php
try{
    require"connect_db.php";
}
    catch(PDOException $e){
        die("Could not connect to the database: " . $e->getMessage());
    }