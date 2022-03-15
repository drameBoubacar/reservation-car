<?php

include_once '../Login/connect.php';

$sql = $db->query('SELECT * FROM reservation;');
$rentals = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app.css/app.css">
    <title>Document</title>
</head>
<body>
    <h1>My Rentals</h1>
    <div class="container-rentals">
    <?php
        foreach($rentals as $rental){  
        ?>
       
            <div class="content-rentals">
                <p><?= $rental['RENTAL_DATE_TIME']; ?></p>
                <p><?= $rental['RETURN_DATE_TIME']; ?></p>
            </div>
        
        <?php
        }
    ?>
    </div>
</body>
</html>