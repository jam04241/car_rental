<?php
// tbl_rent_car
$valid = $_POST['valid']; // valid_id
$licence = $_POST['licence']; // licence_no
$type = $_POST['type']; // car_type
$vehicle = $_POST['vehicle']; // Vehicle
$pick_date = $_POST['pick_date']; // date_rental
$return_date = $_POST['return_date']; // date_period


try{
    require"connect_db.php";

    $email = $_SESSION['email'];
    $fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = {$email}";
    $stmt1 = $pdo->prepare($fk_query1);
    $fk_ID_ACC = $stmt1->execute([$stmt1]);

    // insert data in tbl_rent_car
    $query="INSERT INTO tbl_rent_car(valid_id,licence_no,car_type,Vehicle,date_rental,date_period)values(?,?,?,?,?,?)";
    $stmt= $pdo->prepare($query);
    $stmt->execute([$valid,$licence,$vehicle,$pick_date,$return_date]);

}
    catch(PDOException $e){
        die("Could not connect to the database: " . $e->getMessage());
    }
