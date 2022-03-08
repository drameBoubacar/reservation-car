<?php
session_start();
include_once './reservation-car/Login/connect.php';
$email = "test@admin.fr";
$password = "1234";
$passErr = "";
$emailErr = "";

if (isset($_POST['submit']) && isset($email) && isset($password)) {
    header('location: ../Html/index.html');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="container_form">
            <form action="" method="POST" class="form">
                <div class="form-example">
                    <label for="email">Your email: </label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-example">
                    <label for="pass">Password: </label>
                    <input type="password" name="pass" id="pass" required>
                </div>
                <div class="form-example">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
        <div class="car_headlight" id="car_headlight">
            <img src="../img/voiture_eteint.svg" alt="">
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>