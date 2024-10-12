<?php
session_start();
// getting foreign key
$email = $_SESSION['email'];
        try {
            require("connect_db.php");
            
            // GETTING FOREIGN KEY
            $Qid_acc = 'SELECT ID_ACC FROM tbl_userlogin WHERE email = ? ORDER BY Fname DESC LIMIT 1';
            $fkstmt = $pdo->prepare($Qid_acc);
            $fkstmt->execute([$email]);

            // ID_ACC Ready to use
            $fk_id_acc_receipt = $fkstmt->fetchColumn();

            $rec_fname = 'SELECT Fname FROM tbl_userlogin WHERE ID_ACC = ? ORDER BY email DESC LIMIT 1';
            $fkstmt1 = $pdo->prepare($rec_fname);
            $fkstmt1->execute([$fk_id_acc_receipt]);

            // firstname for receipt
            $_SESSION['full_name_receipt'] = $fkstmt1->fetchColumn();  // Set first name in session


            $rec_lname = 'SELECT Lname FROM tbl_userlogin WHERE ID_ACC = ? ORDER BY email DESC LIMIT 1';
            $fkstmt2 = $pdo->prepare($rec_lname);
            $fkstmt2->execute([$fk_id_acc_receipt]);

            // lastname for receipt
            $_SESSION['full_name_receipt'] .= ' ' . $fkstmt2->fetchColumn();  // Concatenate last name to full nam

        
            $rec_contact_no = 'SELECT contact_no FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
            $fkstmt3 = $pdo->prepare($rec_contact_no);
            $fkstmt3->execute([$fk_id_acc_receipt]);

            // contact number for receipt
            $_SESSION['contact_receipt'] = $fkstmt3->fetchColumn();  // Store contact number in session


            $rec_addrss = 'SELECT addrss FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
            $fkstmt4 = $pdo->prepare($rec_addrss);
            $fkstmt4->execute([$fk_id_acc_receipt]);

            // address for receipt
            $_SESSION['address_receipt'] = $fkstmt4->fetchColumn();  // Store address in session


            $rec_cartype = 'SELECT car_type FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
            $fkstmt5 = $pdo->prepare($rec_cartype);
            $fkstmt5->execute([$fk_id_acc_receipt]);

            // car type for receipt
            $_SESSION['cartype_receipt'] = $fkstmt5->fetchColumn();  // Store car type in session


            $rec_vehicle = 'SELECT Vehicle FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY created_at DESC LIMIT 1';
            $fkstmt6 = $pdo->prepare($rec_vehicle);
            $fkstmt6->execute([$fk_id_acc_receipt]);

            // vehicle for receipt
            $_SESSION['vehicle_receipt'] = $fkstmt6->fetchColumn();  // Store vehicle type in session


            $rec_pickdate = 'SELECT date_rental FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY created_at DESC LIMIT 1';
            $fkstmt7 = $pdo->prepare($rec_pickdate);
            $fkstmt7->execute([$fk_id_acc_receipt]);

            // pickdate for receipt
            $_SESSION['pickdate_receipt'] = $fkstmt7->fetchColumn();  // Store pick-up date in session

            $rec_returndate = 'SELECT date_period FROM tbl_rent_car WHERE ID_ACC = ? ORDER BY rent_no DESC LIMIT 1';
            $fkstmt8 = $pdo->prepare($rec_returndate);
            $fkstmt8->execute([$fk_id_acc_receipt]);

            // return for receipt
            $_SESSION['returndate_receipt'] = $fkstmt8->fetchColumn();  // Store return date in session


            $rec_modeofpay = 'SELECT modeofpay FROM tbl_client_payment WHERE ID_ACC = ? ORDER BY reference_no DESC LIMIT 1';
            $fkstmt9 = $pdo->prepare($rec_modeofpay);
            $fkstmt9->execute([$fk_id_acc_receipt]);

            // mode of payment for receipt
            $_SESSION['mop_receipt'] = $fkstm9->fetchColumn();  // Store mode of payment in session


            $rec_downpay = 'SELECT dp FROM tbl_client_payment WHERE ID_ACC = ? ORDER BY reference_no DESC LIMIT 1';
            $fkstmt10 = $pdo->prepare($rec_downpay);
            $fkstmt10->execute([$fk_id_acc_receipt]);

            // down payment Ready to use
            $_SESSION['downpay_receipt'] = $fkstmt10->fetchColumn();  // Store down payment in session
            

            header("Location: ../Home/Home.php");
            exit();
            
        } catch (PDOException $e) {
            die("Could not connect to the database: " . $e->getMessage());
        }
    
?>