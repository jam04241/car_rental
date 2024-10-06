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

    //FOREIGN KEY ID_ACC
    $email = $_SESSION['email'];
    $fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = ?";
    $stmt1 = $pdo->prepare($fk_query1);
    $stmt1->execute([$email]);
    $fk_ID_ACC = $stmt1->fetchColumn(); // Fetch the ID_ACC value
    
    //FOREIGN KEY FOR rent_no
    $valid = $_SESSION["valid"];
    $license = $_SESSION["license"];
    $fk_query2 = "SELECT rent_no FROM tbl_rent_car WHERE valid_id = ? AND licence_no = ?";
    $stmt2 = $pdo->prepare($fk_query2);
    $stmt2->execute([$valid,$license]);
    $fk_rent_no = $stmt2->fetchColumn();

    // insert data in tbl_support_details
    $query1 = 'INSERT INTO tbl_support_details(ID_ACC, rent_no, ref_name, valid_id1, valid_id2, affliation, addrss, contact_no) 
               VALUES (?, ?, ?, ?, ?, ?, ?, ?)';

    $stmt1=$pdo->prepare($query1);
    $stmt1->execute([$fk_ID_ACC,$fk_rent_no,$full_name, $valid1,$valid2,$affiliation,$address,$contact_no]);

    // insert data in tbl_client_payment
    $query2="INSERT INTO tbl_client_payment(ID_ACC,rent_no,Modeofpay,dp)
             VALUES(?,?,?,?)";
    $stmt2=$pdo->prepare($query2);
    $stmt2->execute([$fk_ID_ACC,$fk_rent_no,$modeofpay,$downp]) ;


}
    catch(PDOException $e){
        die("Could not connect to the database: " . $e->getMessage());
    }
