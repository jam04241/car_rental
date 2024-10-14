<?php

include("connect_db.php");

?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ADMIN/admin_css/admin-style.css">
    <title>Admin Server</title>
</head>
<body>
    <div class="main">
        <ul class="navbar">
            <div class="logo">
                <img src="../ADMIN/admin_pictures/Ruben Car Rental(3).png" alt="Car-logo">
            </div>
            <li><a href="Admin-user-update.php">USER-UPDATE</a></li>
                <li><a href="user-reports.php">USER-REPORTS</a></li>
                <li><a href="client_pay.php">CLIENT-PAY</a></li>
                <li><a href="rent-approved.php">APPROVAL RENT</a></li>
                <li><a href="adminlogin.php">LOG-OUT</a></li>
        </ul>
        <div class="main2">
                <div class="Tbls-container">

                <div class="Tables">

                <table>
                        <thead>
                            <tr>
                                <th>Reference No</th>
                                <th>ID ACC</th>
                                <th>Rent No</th>
                                <th>Mode of Pay</th>
                                <th>Down Payment</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $queryuser = "SELECT reference_no,ID_ACC,rent_no, modeofpay, dp FROM tbl_client_payment;";
                            $stmt= $pdo->prepare($queryuser);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            if($result){
                                
                                foreach($result as $row){
                                    ?>
                                    <tr>
                                        <td><?= $row['reference_no']; ?></td>
                                        <td><?= $row['ID_ACC']; ?></td>
                                        <td><?= $row['rent_no']; ?></td>
                                        <td><?= $row['modeofpay']; ?></td>
                                        <td><?= $row['dp']; ?></td>
                                      
                                        
                                    </tr>
                                    <?php
                                }
                            }
                            else{
                                ?>
                                <tr>
                                    <td colspan="4">NO RECORD FOUND</td>
                                </tr>
                                <?php

                            }

                            ?>
                            <tr>
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</php>