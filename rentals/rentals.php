<?php

include_once '../Login/connect.php';


$sqlRentals = $db->query('SELECT * FROM reservation 
                          LEFT JOIN cars ON reservation.ID_CAR = cars.ID_CAR 
                          LEFT JOIN user ON reservation.ID_USER = user.ID_USER 
                          LEFT JOIN payment ON reservation.ID_PAYMENT = payment.ID_PAYMENT');
                              
$rentals = $sqlRentals->fetchAll(PDO::FETCH_ASSOC);
var_dump($rentals);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../app.css/app.css"> -->
    <title>Document</title>
</head>
<body>
    <h1>My Rentals</h1>
    <div class="container-rentals">
    <?php
        foreach($rentals as $rental){  
        ?>
            <div class="content-rentals">
                <p><?= $rental['ID_RESERVATION']; ?></p>
                <p><?= $rental['ID_USER']; ?></p>
                <p><?= $rental['ID_PAYMENT']; ?></p>
                <p><?= $rental['ID_CAR']; ?></p>
                <p><?= $rental['RENTAL_DATE_TIME']; ?></p>
                <p><?= $rental['RETURN_DATE_TIME']; ?></p>
            </div>
        <?php
        }
    ?>
    </div>
</body>
</html>