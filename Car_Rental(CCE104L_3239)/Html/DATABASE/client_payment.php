<?php
session_start();
// tbl_client_payment
$modeofpay = $_POST['modeofpay'];
$downp = $_POST['downp'];



try{
    require"connect_db.php";

    //FOREIGN KEY ID_ACC for userlogin
    $email = $_SESSION['email'];
    $fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = ?";
    $stmt1 = $pdo->prepare($fk_query1);
    $stmt1->execute([$email]);
    $fk_ID_ACC = $stmt1->fetchColumn(); // Fetch the ID_ACC value
    
    //FOREIGN KEY FOR rent_no
    $fk_query2 = "SELECT rent_no FROM tbl_rent_car WHERE ID_ACC = ?";
    $stmt2 = $pdo->prepare($fk_query2);
    $stmt2->execute([$fk_ID_ACC]);
    $fk_rent_no = $stmt2->fetchColumn(); // Fetch the rent_no value

    // insert data in tbl_client_payment
    $query2="INSERT INTO tbl_client_payment(ID_ACC,rent_no,modeofpay,dp)
             VALUES(?,?,?,?)";
    $stmt2=$pdo->prepare($query2);
    $stmt2->execute([$fk_ID_ACC,$fk_rent_no,$modeofpay,$downp]);
    
   /* echo "<script>alert('You Successfully Reserve a car!');</script>";
    echo "<script>alert('Please take screenshot to your receipt!');</script>";*/
    echo "<script>window.location.href='../Services/support_rent.php';</script>";
}
    catch(PDOException $e){
        die("Could not connect to the database: " . $e->getMessage());
    }
