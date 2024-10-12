<?php
session_start();
// tbl_rent_car
$valid = $_POST['valid']; // valid_id
$license = $_POST['license']; // licence_no
$rent_contact = $_POST['rent_contact']; // contact_no in tbl_rent_car
$rent_address = $_POST['rent_addrss']; // addrss in tbl_rent_car
$car_type = $_POST['car_type']; // car_type
$vehicle = $_POST['vehicle']; // Vehicle
$pick_date = $_POST['pick_date']; // date_rental
$return_date = $_POST['return_date']; // date_period


try{
    require"connect_db.php";

    $email = $_SESSION['email'];
    $fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = ?";
    $stmt1 = $pdo->prepare($fk_query1);
    $stmt1->execute([$email]);
    $fk_ID_ACC = $stmt1->fetchColumn();

    // insert data in tbl_rent_car
    $query="INSERT INTO tbl_rent_car(ID_ACC, valid_id, license_no, contact_no, addrss, car_type, Vehicle, date_rental, date_period)values(?,?,?,?,?,?,?,?,?)";
    $stmt= $pdo->prepare($query);
    $stmt->execute([$fk_ID_ACC,$valid,$license,$rent_contact,$rent_address,$car_type,$vehicle,$pick_date,$return_date]);
    
    header("Location: ../Services/payment.php");
    exit();
}
    catch(PDOException $e){
        die("Could not connect to the database: " . $e->getMessage());
    }
