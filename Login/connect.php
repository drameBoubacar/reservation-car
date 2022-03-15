<?php
$db = new PDO('mysql:host=localhost;dbname=cars_reservation;charset=utf8mb4', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$page = isset($_GET['p'])?$_GET['p']:'';
if($page == 'add_adress'){
  $adress = $_POST['adress'];
  $stmp = $db->prepare("update user set adress = ? where id_user=1");
  $stmp->bindParam(1,$adress);
  if($stmp->execute()){
    echo('success add');
  }
  else{
    echo('failed');
  }
}else if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_GET['id_user'];
  $stmp = $db->prepare("select * from user where id_user =1");
  $stmp->execute();
  $result = $stmp->fetch(PDO::FETCH_ASSOC);
  if($_POST['username'] == $result['USERNAME'] && $_POST['password'] == $result['PASSWORD'] ){
    sleep(5);
    header('location:../index.php');
    exit();
  }
}