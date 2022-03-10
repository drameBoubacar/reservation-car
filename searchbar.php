<?php
 require_once './Login/connect.php';
 $allCars = $con->query('SELECT * FROM cars');
 var_dump($allCars);
 if(isset($_GET['envoyer']) AND !empty($_GET['envoyer'])){
     $recherche = htmlspecialchars($_GET['envoyer']);
    $allCars = $con->query('SELECT MODEL FROM cars WHERE MODEL LIKE "%'.$recherche.'%"');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <input type="submit" value="" name="envoyer">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="search" name="search" id="" placeholder="Recherche">
    <input type="submit" value="" name="envoyer">
    </form>
</body>
</html>