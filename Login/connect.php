<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=cars_reservation;charset=utf8mb4', 'root', 'Raysayd23**');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$page = isset($_GET['p']) ? $_GET['p'] : '';
if ($page == 'add_adress') {
  $adress = $_POST['adress'];
  $stmp = $db->prepare("update user set adress = ? where id_user=1");
  $stmp->bindParam(1, $adress);
  if ($stmp->execute()) {
    echo ('success add');
  } else {
    echo ('failed');
  }
} else if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_GET['id_user'];
  $stmp = $db->prepare("select * from user where id_user =1");
  $stmp->execute();
  $result = $stmp->fetch(PDO::FETCH_ASSOC);
  if ($_POST['username'] == $result['USERNAME'] && $_POST['password'] == $result['PASSWORD']) {
    sleep(5);
    header('location:../index.php');
    exit();
  }
} else if ($page == 'add_date') {

  $stmp = $db->prepare("INSERT INTO reservation (rental_date_time, return_date_time) VALUES (?,?)");

  $rentalDate = $_POST['rental_date'];
  $timeDate1 = strtotime($rentalDate);
  $new_date = date("Y-m-d H:i:s", $timestamp);

  $rentalDate2 = $_POST['return_date'];
  $timeDate2 = strtotime($rentalDate2);
  $new_date2 = date("Y-m-d H:i:s", $timestamp2);
  $stmp->bindParam(1, $new_date);
  $stmp->bindParam(2, $new_date2);
  if ($stmp->execute()) {
    echo ('success add');
  } else {
    echo ('failed');
  }
}else if ($page == 'next_slider'){
  $id = 1;
  $sqlCar1 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= ?');
  $sqlCar1->bindParam(1, $id);

}
