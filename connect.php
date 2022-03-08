<?php
$host = "localhost";
$db_name = "cars_reservation";
$username = "root";
$password = "";

//Connexion à la base de donnée
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>