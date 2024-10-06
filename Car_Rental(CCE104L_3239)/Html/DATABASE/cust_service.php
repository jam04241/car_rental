<?php
session_start();
 // tbl_support_details
$full_name = $_POST['full_name']; // ref_name VARCHAR(100) NOT NULL
$valid1 = $_POST['valid1']; // valid_id1
$valid2 = $_POST['valid2']; // valid_id2
$affiliation = $_POST['affiliation']; // affliation
$address = $_POST['address']; // address
$contact_no = $_POST['contact_no']; // contact_no

// tbl_client_payment
$modeofpay = $_POST['modeofpay'];
$downp = $_POST['downp'];

// Foreign key for userlogin


try{
    require"connect_db.php";
    // Foreign key for ID_ACC FROM tbl_userlogin
    $email = $_SESSION['email'];
    $fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = ?";
    $stmt1 = $pdo->prepare($fk_query1);
    $stmt1->execute([$email]);
    $fk_ID_ACC = $stmt1->fetchColumn();  // Fetch the ID_ACC value
    
    echo $fk_ID_ACC;  // Output the fetched ID_ACC value

    // Foreign key for rent_no FROM tbl_rent_car
    $valid = $_SESSION["valid"];
    $license = $_SESSION["license"];
    $fk_query2 = "SELECT rent_no FROM tbl_rent_car WHERE valid_id = {$valid} AND licence_no = {$license}";
    $stmt2 = $pdo->prepare($fk_query2);
    $fk_rent_no = $stmt2->execute([$stmt2]);

    // insert data in tbl_client_payment
    $query2="INSERT INTO tbl_client_cust_serv(ID_ACC,rent_no,Modeofpay,dp)values(?,?,?,?)";
    $stmt4=$pdo->prepare($query2);
    $stmt4->execute([$modeofpay,$downp]);


}
    catch(PDOException $e){
        die("Could not connect to the database: " . $e->getMessage());
    }
    // 2 ways to connect
    //$email = $_SESSION['email'];
    //$fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = ?";
    //$stmt1 = $pdo->prepare($fk_query1);
    //$stmt1->execute([$email]);
    //$fk_ID_ACC = $stmt1->fetchColumn();  // Fetch the ID_ACC value


    //$email = $_SESSION['email'];
    //$fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = :email";
    //$stmt1 = $pdo->prepare($fk_query1);
    //$stmt1->execute(['email' => $email]);
    //$fk_ID_ACC = $stmt1->fetchColumn();  // Fetch the ID_ACC value
