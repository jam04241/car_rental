<?php
// getting foreign key
$email = $_SESSION['email'];

    try {
        require("connect_db.php");
        
        // GETTING FOREIGN KEY
        $Qid_acc = 'Select ID_ACC from tbl_userlogin WHERE email = ?';
        $fkstmt = $pdo->prepare($Qid_acc);
        $fkstmt->execute([$email]);

        // ID_ACC Ready to use
        $fk_id_acc_receipt = $fkstmt->fetchColumn();

        $rec_fname = 'SELECT Fname FROM tbl_userlogin WHERE ID_ACC = ? ORDER BY email DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_fname);
        $fkstmt->execute([$fk_id_acc_receipt]);
        

        // firstname for receipt
        $_SESSION['full_name_receipt'] = $fkstmt->fetchColumn();  // Set first name in session


        $rec_lname = 'SELECT Lname FROM tbl_userlogin WHERE ID_ACC = ? ORDER BY email DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_lname);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // lastname for receipt
        $_SESSION['full_name_receipt'] .= ' ' . $fkstmt->fetchColumn();  // Concatenate last name to full nam

     
        $rec_contact_no = 'SELECT contact_no FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_contact_no);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // contact number for receipt
        $_SESSION['contact_receipt'] = $fkstmt->fetchColumn();  // Store contact number in session


        $rec_addrss = 'SELECT addrss, contact_no FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_addrss);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // address for receipt
        $_SESSION['address_receipt'] = $fkstmt->fetchColumn();  // Store address in session


        $rec_cartype = 'SELECT car_type FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_cartype);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // car type for receipt
        $_SESSION['cartype_receipt'] = $fkstmt->fetchColumn();  // Store car type in session


        $rec_vehicle = 'SELECT Vehicle FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_vehicle);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // vehicle for receipt
        $_SESSION['vehicle_receipt'] = $fkstmt->fetchColumn();  // Store vehicle type in session


        $rec_pickdate = 'SELECT date_rental FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_pickdate);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // pickdate for receipt
        $_SESSION['pickdate_receipt'] = $fkstmt->fetchColumn();  // Store pick-up date in session

        $rec_returndate = 'SELECT date_period FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_returndate);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // return for receipt
        $_SESSION['returndate_receipt'] = $fkstmt->fetchColumn();  // Store return date in session


        $rec_Modeofpay = 'SELECT Modeofpay FROM tbl_client_payment WHERE ID_ACC = ? ORDER BY reference_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_Modeofpay);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // mode of payment for receipt
        $_SESSION['mop_receipt'] = $fkstmt->fetchColumn();  // Store mode of payment in session


        $rec_downpay = 'SELECT dp FROM tbl_client_payment WHERE ID_ACC = ? ORDER BY reference_no DESC LIMIT 1';
        $fkstmt = $pdo->prepare($rec_downpay);
        $fkstmt->execute([$fk_id_acc_receipt]);

        // down payment Ready to use
        $_SESSION['downpay_receipt'] = $fkstmt->fetchColumn();  // Store down payment in session
        
    } catch (PDOException $e) {
        die("Could not connect to the database: " . $e->getMessage());
    }

?>