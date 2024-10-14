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
                                <th>rent_no</th>
                                <th>ID ACC</th>
                                <th>Valid Id</th>
                                <th>License No</th>
                                <th>Contact No</th>
                                <th>Address</th>
                                <th>Car Type</th>
                                <th>Vehicle</th>
                                <th>Date Rental</th>
                                <th>Date Period</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $queryuser = "SELECT rent_no, ID_ACC, valid_id, license_no, contact_no, addrss, car_type, Vehicle, date_rental, date_period FROM tbl_rent_car;";
                            $stmt= $pdo->prepare($queryuser);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            if($result){
                                
                                foreach($result as $row){
                                    ?>
                                    <tr>
                                        <td><?= $row['rent_no']; ?></td>
                                        <td><?= $row['ID_ACC']; ?></td>
                                        <td><?= $row['valid_id']; ?></td>
                                        <td><?= $row['license_no']; ?></td>
                                        <td><?= $row['contact_no']; ?></td>
                                        <td><?= $row['addrss']; ?></td>
                                        <td><?= $row['car_type']; ?></td>
                                        <td><?= $row['Vehicle']; ?></td>
                                        <td><?= $row['date_rental']; ?></td>
                                        <td><?= $row['date_period']; ?></td>
                                        
                                    </tr>
                                    <?php
                                }
                            }
                            else{
                                ?>
                                <tr>
                                    <td colspan="10">NO RECORD FOUND</td>
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