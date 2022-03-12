<?php
$host = "127.0.0.1";
$db_name = "cars_reservation";
$username = "root";
$password = "";
$port = "2323";

try {
  $db = new PDO('mysql:host=$host;port = $port;dbname=$db_name;charset=utf8mb4', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
} catch (PDOException $e) {
  echo "Connection failed : ". $e->getMessage();
}
?>

