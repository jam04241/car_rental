<?php
    session_start();
    
    // tbl_client_cus_serv
    $fullname = $_POST['fullname'];
    $cust_contact_no = $_POST['cust_contact_no'];
    $cust_addrss = $_POST['cust_addrss'];
    $msgs = $_POST['msgs'];

    
    try{
        require"connect_db.php";
    
        // Foreign key for ID_ACC FROM tbl_userlogin
        $email = $_SESSION['email'];
        $fk_query1 = "SELECT ID_ACC FROM tbl_userlogin WHERE email = ?";
        $stmt1 = $pdo->prepare($fk_query1);
        $stmt1->execute([$email]);
        $fk_ID_ACC = $stmt1->fetchColumn();  // Fetch the ID_ACC value
    
        // insert data in tbl_client_payment
        $query2="INSERT INTO tbl_client_cust_serv(ID_ACC,fullname,Contact_no,addrss,msgs)values(?,?,?,?,?)";
        $stmt4=$pdo->prepare($query2);
        $stmt4->execute([$fk_ID_ACC, $fullname, $cust_contact_no, $cust_addrss, $msgs]);
        
        echo "<script>alert('Your concern has been submitted!\nThank you for bringing this to our attention!');</script>";  
        echo "<script>window.location.href='../Home/Home.php';</script>";
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
    