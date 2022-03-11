<?php
$host = "localhost";
$db_name = "cars_reservation";
$username = "root";
$password = "";

try {
  $db = new PDO('mysql:host=$host;dbname=$db_name;charset=utf8mb4', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
} catch (PDOException $e) {
  echo "Connection failed : ". $e->getMessage();
}
?>

